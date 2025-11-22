<?php
session_start();
if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
    header('Location: admin.php'); exit;
}
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // default Username for demo 
  $demo_username = 'admin';
  if ($_POST['username'] === $demo_username && $_POST['password'] === $demo_password) {
      $_SESSION['admin_logged'] = true;
      header('Location: admin.php'); exit;
  }

    $pwd = $_POST['password'] ?? '';
    // default password for demo 
    if ($pwd === 'Rainwater2025!') {
        $_SESSION['admin_logged'] = true;
        header('Location: admin.php'); exit;
    } else {
        $err = 'Invalid password';
    }
}
?>
<!DOCTYPE html>
<html><head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Admin Login</title>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
<?php include 'header.php'; ?>
<main class="flex-grow">
<section class="py-20">
  <div class="max-w-md mx-auto px-6">
    <div class="bg-white p-6 rounded shadow">
      <h2 class="text-2xl font-semibold mb-4">Admin Login</h2>
      <?php if($err): ?><p class="text-red-600 mb-3"><?php echo $err; ?></p><?php endif; ?>
      <form method="POST">
         <label class="block text-sm font-medium mb-1">Username </label>
         <input type="text" name="username" placeholder="Enter username" 
                class="input-field mb-4" />
        <label class="block text-sm font-medium">Password</label>
        <input name="password" type="password" class="input-field" required />
        <div class="mt-4">
          <button class="btn-primary" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</section>
</main>
<?php include 'footer.php'; ?>
</body></html>
