(function () {
  'use strict';
  var form      = document.getElementById('ss-contact-form');
  var feedback  = document.getElementById('ss-form-feedback');
  var submitBtn = document.getElementById('ss-submit-btn');
  var defaultBtnHTML = submitBtn.innerHTML;

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // HTML5 validation
    if (!form.checkValidity()) {
      form.classList.add('was-validated');
      return;
    }

    // reCAPTCHA check
    if (typeof grecaptcha === 'undefined' || grecaptcha.getResponse() === '') {
      showFeedback(false, 'Please complete the reCAPTCHA verification.');
      return;
    }

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending…';
    feedback.innerHTML = '';
    feedback.className = '';

    fetch('contact-handler.php', { method: 'POST', body: new FormData(form) })
      .then(function (r) { return r.json(); })
      .then(function (json) {
        showFeedback(json.ok, json.message);
        if (json.ok) { form.reset(); grecaptcha.reset(); }
      })
      .catch(function () {
        showFeedback(false, 'Network error — please try again or email us directly.');
      })
      .finally(function () {
        submitBtn.disabled = false;
        submitBtn.innerHTML = defaultBtnHTML;
      });
  });

  function showFeedback(ok, msg) {
    feedback.textContent = msg;
    feedback.className = ok
      ? 'alert alert-success'
      : 'alert alert-warning';
  }
})();

