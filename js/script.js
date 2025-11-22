
// header scroll
window.addEventListener('scroll', function() {
  const h = document.getElementById('site-header');
  if (!h) return;
  if (window.scrollY > 40) h.classList.add('shadow-lg');
  else h.classList.remove('shadow-lg');
});

// simple client-side validation for registration form
document.addEventListener('DOMContentLoaded', function(){
  const form = document.getElementById('registrationForm');
  if (form) {
    form.addEventListener('submit', function(e){
      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const consent = form.consent ? form.consent.checked : true;
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!name || !email) {
        alert('Please fill required fields: Name and Email.');
        e.preventDefault();
        return false;
      }
      if (!emailPattern.test(email)) {
        alert('Please enter a valid email.');
        e.preventDefault();
        return false;
      }
      if (!consent) {
        alert('Please agree to the terms.');
        e.preventDefault();
        return false;
      }
      // allow submit
    });
  }
});
AOS.init({ once: true });

// FAQ toggle functionality
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', () => {
    const answer = btn.nextElementSibling; // answer div
    const arrow = btn.querySelector('.arrow'); // arrow span

    // Toggle open class
    answer.classList.toggle('open');
    arrow.classList.toggle('open');

    // Dynamically set max-height for smooth slide
    if (answer.classList.contains('open')) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = "0";
    }
  });
});

