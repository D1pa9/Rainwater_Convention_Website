
<?php
// modern header
?>
<header id="site-header" class="sticky top-0 z-40 bg-white shadow-sm">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-5 py-3">

    <!-- Logo + Title -->
    <div class="flex items-center gap-3">
      <img src="assets/logos/logo.png" 
           alt="logo"
           class="h-12 w-12 object-contain"
           onerror="this.style.display='none'">

      <span class="text-primary font-bold text-xl tracking-tight">
        Rainwater Convention
      </span>
    </div>

    <!-- Navigation -->
    <nav>
      <ul class="flex gap-8 items-center font-medium text-gray-700">
        <li>
          <a href="index.php" class="nav-link-modern">Home</a>
        </li>
        <li>
          <a href="faq.php" class="nav-link-modern">FAQs</a>
        </li>
        <li>
          <a href="admin_login.php" class="nav-link-modern">Admin</a>
        </li>
        <li>
          <a href="register.php" 
            class="relative px-4 py-2 rounded-md bg-primary text-white font-semibold shadow-sm hover:bg-primary/90 transition">
            Register
          </a>
        </li>
       
      </ul>
    </nav>

  </div>
</header>
