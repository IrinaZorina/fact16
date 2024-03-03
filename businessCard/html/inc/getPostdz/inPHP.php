<?

if (isset($_POST["login"]) && isset($_POST["user"]) && isset($_POST['pass'])) { 
  $user = $_POST["user"];
  $password = $_POST["pass"];   
    if ($_POST["user"] == "admin" && $_POST["pass"] == "admin") {
      header("Location: select.php");
    } else {
      echo "Доступ закрыт, попробуйте еще раз.";
    }
  }else {
    echo "Укажите логин и пароль.";
  }
  
// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";
