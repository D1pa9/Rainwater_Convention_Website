<?php
include 'db_connect.php';

//server-side validation and safe insertion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($conn->real_escape_string($_POST['name'] ?? ''));
    $email = trim($conn->real_escape_string($_POST['email'] ?? ''));
    $phone = trim($conn->real_escape_string($_POST['phone'] ?? ''));
    $org = trim($conn->real_escape_string($_POST['organization'] ?? ''));
    $consent = isset($_POST['consent']) ? 1 : 0;

    if (!$name || !$email || !$consent) {
        header("Location: register.php?status=err");
        exit;
    }

    // simple email format check
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?status=invalidemail");
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO participants (name, email, phone, organization) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $org);
    if ($stmt->execute()) {
        header("Location: register.php?status=success");
        exit;
    } else {
        header("Location: register.php?status=err");
        exit;
    }
}
header("Location: register.php");
exit;
?>
