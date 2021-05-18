<?php
if(!isset($_COOKIE["username"])) {
  header('Location: login.php');
} else {
  unset($_COOKIE["username"]);
  setcookie("username", "", 1); 
  header('Location: login.php');
}
?>

