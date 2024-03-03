<?
$myLink = null;

if (isset($_GET['Laboratory'])) {
  $myLink = htmlspecialchars($_GET['Laboratory']);
}
if (isset($_GET['logout'])) {
  header("Location: getPostDZ3.php");
}
