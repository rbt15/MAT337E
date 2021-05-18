<?php

include "conn.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if(empty($_POST["username"])){
  $username_err = "Please enter a username.";
} else{
  // Prepare a select statement
  $sql = "SELECT id FROM users WHERE username = ?";
  
  if($stmt = mysqli_prepare($c, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      
      // Set parameters
      $param_username = trim($_POST["username"]);
      
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          /* store result */
          mysqli_stmt_store_result($stmt);
          
          if(mysqli_stmt_num_rows($stmt) == 1){
              $username_err = "This username is already taken.";
          } else{
              $username = trim($_POST["username"]);
          }
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
  }
}

// Validate password
if(empty($_POST["password"])){
  $password_err = "Please enter a password.";     
} else{
  $password = trim($_POST["password"]);
}


if (isset($_POST['signup_button'])) {
  if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
    
    // Prepare an insert statement
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
      
    if($stmt = mysqli_prepare($c, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
      
      // Set parameters
      $param_username = $username;
      $param_password = $password; // Creates a password hash
      
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          // Redirect to login page
          header("location: index.php");
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }
      // Close statement
      mysqli_stmt_close($stmt);
    }
  } else {
    echo "$username_err  $password_err  $confirm_password_err";
  }
} else if (isset($_POST['login_button'])) {
  $username= $_POST["username"];
  $password= $_POST["password"];
  $query = mysqli_query($c,"SELECT * FROM users WHERE username='$username' AND password='$password';") or die (mysqli_error($c));
  $array = mysqli_fetch_row($query);
  if($array[0]){
      setcookie("username", $array[1]);
      header('Location: welcome.php');
  }
  else{
    echo '<script type="text/javascript">alert("Wrong Username or Password");window.history.back();</script>';
  }
  print_r($array);
}
?>