<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rainwater Convention 2025</title>

  <!-- Tailwind via CDN for quick dev (ok for assignment/prototype) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS for scroll animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="bg-gray-50 text-gray-800">

<?php include 'header.php'; ?>
<main class="flex-grow">
    <!-- HERO -->
    <section class="relative h-screen">
    <img src="assets/images/hero.jpeg" alt="Hero" class="absolute inset-0 w-full h-full object-cover filter brightness-75" />
    <div class="absolute inset-0 bg-gradient-to-b from-black/25 to-black/10"></div>

    <div class="relative z-10 flex items-center justify-center h-full">
        <div class="text-center px-6" data-aos="fade-up">
        <h1 class="text-white text-4xl md:text-6xl font-extrabold drop-shadow-lg">Rainwater Convention 2025</h1>
        <p class="text-white/90 mt-4 text-lg md:text-xl max-w-2xl mx-auto">Building a sustainable future through community-led rainwater harvesting and resilient water systems.</p>
        <div class="mt-8 flex justify-center gap-4">
            <a href="register.php" class="btn-primary">Register Now</a>
        </div>
        </div>
    </div>
    </section>

    <!-- ABOUT / HIGHLIGHTS old one
    <section class="py-16 bg-white" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
        <div>
        <h3 class="text-2xl font-semibold mb-4">About the Convention</h3>
        <p class="text-gray-700">The Rainwater Convention 2025 brings together practitioners, policymakers, NGOs and young professionals to share practical knowledge, pilot innovations and build partnerships for sustainable water solutions across Bangladesh.</p>
        <ul class="mt-4 space-y-2 text-gray-700">
            <li>• Workshops & hands-on training</li>
            <li>• Expert presentations</li>
            <li>• Networking & small grants</li>
        </ul>
        </div>
        <div class="grid gap-4">
        <div class="highlight-card">Sustainable Solutions</div>
        <div class="highlight-card">Workshops & Training</div>
        <div class="highlight-card">Expert Speakers</div>
        </div>
    </div>
    </section>
    -->
    <!-- ABOUT / HIGHLIGHTS -->
    <!-- ABOUT / STORY SECTION -->
<section class="py-24 bg-gray-50 relative" data-aos="fade-up">

  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <!-- Left: Image with subtle highlight -->
    <div class="relative">
      <img 
        src="assets/images/about.jpeg" 
        alt="Community rainwater harvesting initiative" 
        class="rounded-2xl shadow-xl object-cover w-full h-[420px]">

      <!-- Soft light overlay -->
      <div class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-primary/15 to-transparent"></div>

      <!-- Decorative line -->
      <div class="absolute -bottom-4 left-0 w-32 h-1 bg-primary rounded-full"></div>
    </div>

    <!-- Right: Text content -->
    <div>
      <h3 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
        Building Climate-Resilient Water Solutions
      </h3>

      <p class="text-gray-700 mt-5 leading-relaxed text-lg">
        In many coastal and drought-prone areas of Bangladesh, families struggle to access 
        clean water year-round. Rainwater harvesting provides an affordable, sustainable  
        solution—helping communities store safe water, reduce salinity challenges, and build 
        resilience against climate change.
      </p>

      <p class="text-gray-700 mt-4 leading-relaxed">
        The Rainwater Convention 2025 brings together leaders, engineers, field experts, and 
        community innovators to showcase practical models that are already transforming lives 
        across the country.
      </p>

      <!-- Impact Stats Card -->
      <div class="mt-8 grid grid-cols-3 text-center bg-white shadow-lg rounded-xl p-6">
        <div>
          <p class="text-3xl font-bold text-primary">35%</p>
          <p class="text-gray-600 text-sm">areas facing water scarcity</p>
        </div>

        <div>
          <p class="text-3xl font-bold text-primary">12M+</p>
          <p class="text-gray-600 text-sm">people affected yearly</p>
        </div>

        <div>
          <p class="text-3xl font-bold text-primary">500+</p>
          <p class="text-gray-600 text-sm">rainwater units installed</p>
        </div>
      </div>

    </div>

  </div>

</section>


       <!-- QUICK FAQ PREVIEW -->
    <!-- KEY THEMES / RESEARCH HIGHLIGHTS -->
<section class="py-20 bg-white" data-aos="fade-up">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-10 text-center">
      Key Themes of the Rainwater Convention 2025
    </h2>

    <p class="text-gray-600 max-w-3xl mx-auto text-center mb-12">
      The convention highlights real-world research, field studies, and innovative 
      approaches to rainwater harvesting across Bangladesh and South Asia.  
    </p>

    <!-- Cards Grid -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="font-bold text-xl text-primary mb-2">
          Reliability & Economic Benefits
        </h3>
        <p class="text-gray-700 text-sm">
          Findings from commercial buildings in Dhaka showing cost savings, water efficiency,
          and long-term reliability of rainwater systems.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="font-bold text-xl text-primary mb-2">
          Rainwater in Salinity-Affected Areas
        </h3>
        <p class="text-gray-700 text-sm">
          Adaptation models for southern coastal communities facing saltwater intrusion and climate impacts.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="font-bold text-xl text-primary mb-2">
          Policy & Urban Integration
        </h3>
        <p class="text-gray-700 text-sm">
          Why city-level policies are essential for scaling rainwater harvesting in dense areas like Kathmandu Valley.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="font-bold text-xl text-primary mb-2">
          Industrial Rainwater Systems
        </h3>
        <p class="text-gray-700 text-sm">
          Practical lessons from industrial building installations and feasibility evaluations.
        </p>
      </div>

      <!-- Card 5 -->
      <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="font-bold text-xl text-primary mb-2">
          RMG & Textile Sector Adoption
        </h3>
        <p class="text-gray-700 text-sm">
          Case study from Next Accessories Ltd. on integrating rainwater harvesting into factory operations.
        </p>
      </div>

    </div>

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

