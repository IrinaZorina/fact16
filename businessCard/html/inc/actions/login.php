<?
require_once __DIR__ . '/func.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
  setOldValue('email', $email);
  setValidationError('email', 'Не верный формат');
  setMessage('error', 'Ошибка валидации');
  redirect('../../login.php');
}

$user = findUser($email);

if (!$user) {
  setMessage('error', "Invalid email address");
  redirect('../../login.php');
}

if(!password_verify($password, $user['password'])){
  setMessage('error', "Invalid password");
  redirect('../../login.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('../../lk.php');