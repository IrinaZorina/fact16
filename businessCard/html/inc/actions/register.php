<?php
require_once __DIR__ . '/func.php';



$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;


if (empty($name)) {
  setValidationError('name', 'Неверное имя');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  setValidationError('email', 'Неверная почта');
}

if (empty($password)) {
  setValidationError('password', 'Пароль пустой');
}

if ($password !== $passwordConfirmation) {
  setValidationError('password', 'Пароли не совпадают');
}

if (!empty($_SESSION['validation'])) {
  setOldValue('name', $name);
  setOldValue('email', $email);

  redirect('../../register.php');
}

$pdo = getPDO();

$query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$params = [
  'name'=>$name,
  'email'=>$email, 
  'password'=>password_hash($password, PASSWORD_DEFAULT)
];
$stmt = $pdo->prepare($query);

try {
$stmt->execute($params);
} catch (\Exception $e) {
  die($e->getMessage());
}

redirect('../../login.php');