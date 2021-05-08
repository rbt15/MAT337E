<?php
if(!isset($_COOKIE["username"])) {
  header('Location: index.php');
} else {
  unset($_COOKIE["username"]);
  setcookie("username", "", 1);
}

?>

