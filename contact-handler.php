<?php
declare(strict_types=1);

require __DIR__ . '/includes/env.php';
load_env(__DIR__ . '/.env');

header('Content-Type: application/json');

function respond(bool $ok, string $message): void {
    echo json_encode(['ok' => $ok, 'message' => $message]);
    exit;
}

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Method not allowed.');
}

// Collect and sanitize inputs
$name     = trim(strip_tags($_POST['name']            ?? ''));
$company  = trim(strip_tags($_POST['company']         ?? ''));
$email    = trim(          ($_POST['email']            ?? ''));
$phone    = trim(strip_tags($_POST['phone']           ?? ''));
$type     = trim(strip_tags($_POST['production_type'] ?? ''));
$budget   = trim(strip_tags($_POST['budget']          ?? ''));
$timeline = trim(strip_tags($_POST['timeline']        ?? ''));
$message  = trim(strip_tags($_POST['message']         ?? ''));
$captcha  = trim(          ($_POST['g-recaptcha-response'] ?? ''));

// Required field validation
if ($name === '')                              respond(false, 'Please enter your name.');
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) respond(false, 'Please enter a valid email address.');
if ($message === '')                           respond(false, 'Please describe your project.');

// Length limits
if (strlen($name)    > 100)  respond(false, 'Name must be 100 characters or fewer.');
if (strlen($message) > 4000) respond(false, 'Message must be 4,000 characters or fewer.');

// reCAPTCHA verification
$secret = $_ENV['CAPTCHA_SECRET_KEY'] ?? '';
if ($secret === '' || $secret === 'your_secret_key_here') {
    respond(false, 'reCAPTCHA is not configured on the server.');
}
if ($captcha === '') {
    respond(false, 'Please complete the reCAPTCHA verification.');
}

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query([
        'secret'   => $secret,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ]),
    CURLOPT_TIMEOUT        => 10,
]);
$verify_raw = curl_exec($ch);
curl_close($ch);

$verify = json_decode($verify_raw ?: '{}', true);
if (empty($verify['success'])) {
    respond(false, 'reCAPTCHA verification failed. Please try again.');
}

// Human-readable labels for the email body
$type_labels = [
    'commercial'  => 'TV Commercial',
    'psa'         => 'PSA',
    'training'    => 'Training & Orientation',
    'educational' => 'Educational Video',
    'marketing'   => 'Marketing Video',
    'web'         => 'Web Video',
    'corporate'   => 'Corporate / Executive',
    'other'       => 'Other',
];
$budget_labels = [
    'under5'  => 'Under $5,000',
    '5to15'   => '$5,000 – $15,000',
    '15to50'  => '$15,000 – $50,000',
    'over50'  => '$50,000+',
    'unknown' => 'Not Sure Yet',
];
$timeline_labels = [
    'asap'     => 'ASAP',
    'month'    => 'Within a month',
    'quarter'  => '1–3 months',
    'flexible' => 'Flexible',
];

$type_label     = $type_labels[$type]         ?? $type;
$budget_label   = $budget_labels[$budget]     ?? $budget;
$timeline_label = $timeline_labels[$timeline] ?? $timeline;

// Build email body
$lines = [
    "New project inquiry via the Sure Shot Productions website.",
    "",
    "Name:     {$name}",
];
if ($company  !== '') $lines[] = "Company:  {$company}";
$lines[] = "Email:    {$email}";
if ($phone    !== '') $lines[] = "Phone:    {$phone}";
if ($type     !== '') $lines[] = "Type:     {$type_label}";
if ($budget   !== '') $lines[] = "Budget:   {$budget_label}";
if ($timeline !== '') $lines[] = "Timeline: {$timeline_label}";
$lines[] = "";
$lines[] = "---";
$lines[] = $message;
$lines[] = "---";

$to      = $_ENV['TO_ADDRESS']   ?? '';
$from    = $_ENV['FROM_ADDRESS'] ?? '';

if ($to === '' || $from === '') {
    respond(false, 'Mail is not configured on the server.');
}

$subject = "Website Inquiry — {$name}";
$body    = implode("\r\n", $lines);
$headers = implode("\r\n", [
    "From: Sure Shot Productions <{$from}>",
    "Reply-To: {$name} <{$email}>",
    "MIME-Version: 1.0",
    "Content-Type: text/plain; charset=UTF-8",
]);

if (!mail($to, $subject, $body, $headers)) {
    respond(false, 'The message could not be delivered. Please email us directly at will@sureshotinc.com.');
}

respond(true, "Thanks, {$name}! Your message has been received — we'll be in touch shortly.");
