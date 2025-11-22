<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register - Rainwater Convention</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

<?php include 'header.php'; ?>
<main class="flex-grow">
    <section class="py-16" data-aos="fade-up">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">Participant Registration</h2>

        <form id="registrationForm" action="submit_registration.php" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        <div>
            <label class="block text-sm font-medium">Full Name *</label>
            <input name="name" type="text" required class="input-field" />
        </div>
        <div>
            <label class="block text-sm font-medium">Email *</label>
            <input name="email" type="email" required class="input-field" />
        </div>
        <div>
            <label class="block text-sm font-medium">Phone</label>
            <input name="phone" type="text" class="input-field" />
        </div>
        <div>
            <label class="block text-sm font-medium">Organization</label>
            <input name="organization" type="text" class="input-field" />
        </div>
        <div class="flex items-center">
            <input id="consent" name="consent" type="checkbox" required class="mr-2" />
            <label for="consent" class="text-sm">I agree to the terms and data usage.</label>
        </div>
        <div>
            <button type="submit" class="btn-primary">Submit Registration</button>
        </div>
        </form>

        <p class="mt-4 text-sm text-gray-600">After submission you will see a confirmation message.</p>
    </div>
    </section>
</main>
<?php include 'footer.php'; ?>

<script>
  AOS.init({ once: true });
</script>
<script src="js/script.js"></script>
</body>
</html>
