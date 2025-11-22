<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>FAQs - Rainwater Convention</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

<?php include 'header.php'; ?>

<main class="flex-grow">
  <section class="py-16" data-aos="fade-up">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl font-semibold mb-6 text-primary">Frequently Asked Questions</h2>

      <div class="space-y-4">

        <div class="faq-item border-b pb-3">
          <button class="faq-q flex justify-between items-center w-full text-left py-2">
            <span>What is the purpose of the Rainwater Convention?</span>
            <span class="arrow transition-transform duration-300">&#9662;</span>
          </button>
          <div class="faq-a mt-2 text-gray-600">
            The convention promotes practical rainwater harvesting, resilience and community solutions.
          </div>
        </div>

        <div class="faq-item border-b pb-3">
          <button class="faq-q flex justify-between items-center w-full text-left py-2">
            <span>Who can participate in the event?</span>
            <span class="arrow transition-transform duration-300">&#9662;</span>
          </button>
          <div class="faq-a mt-2 text-gray-600">
            Students, young professionals, NGOs, government staff and anyone interested.
          </div>
        </div>

        <div class="faq-item border-b pb-3">
          <button class="faq-q flex justify-between items-center w-full text-left py-2">
            <span>Is registration free?</span>
            <span class="arrow transition-transform duration-300">&#9662;</span>
          </button>
          <div class="faq-a mt-2 text-gray-600">
            Yes. There is no registration fee for participants.
          </div>
        </div>

        <div class="faq-item border-b pb-3">
          <button class="faq-q flex justify-between items-center w-full text-left py-2">
            <span>Where will the convention be held?</span>
            <span class="arrow transition-transform duration-300">&#9662;</span>
          </button>
          <div class="faq-a mt-2 text-gray-600">
            Venue details will be emailed to registered participants; primary venue: Water Resource Center, Dhaka.
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script>
  AOS.init({ once: true });

  // FAQ toggle functionality
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const answer = btn.nextElementSibling;
      const arrow = btn.querySelector('.arrow');

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
</script>

</body>
</html>
