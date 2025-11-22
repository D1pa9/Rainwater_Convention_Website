<?php
session_start();
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: admin_login.php'); exit;
}
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $stmt = $conn->prepare("DELETE FROM participants WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
header('Location: admin.php');
exit;
?>
