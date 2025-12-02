<?php
// login.php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? 'resident'; // role passed from form: 'resident' or 'admin'

// Basic validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !$password) {
    $_SESSION['login_error'] = 'Please provide a valid email and password.';
    header('Location: index.php');
    exit;
}

// Determine table and redirect based on role
if ($role === 'admin') {
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = ?");
    $redirect = 'admin/admin_dashboard.php';
} else {
    $stmt = $pdo->prepare("SELECT * FROM residents WHERE email = ?");
    $redirect = 'resident/resident_dashboard.php';
}

$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !password_verify($password, $user['password'])) {
    $_SESSION['login_error'] = 'Invalid email or password.';
    header('Location: index.php');
    exit;
}

// Successful login
$_SESSION['user_id'] = $user['id'];
$_SESSION['first_name'] = $user['first_name'];
$_SESSION['role'] = $role;

header("Location: $redirect");
exit;
