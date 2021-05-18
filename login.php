<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      sizes="32x32"
      href="https://www.formula1.com/etc/designs/fom-website/favicon-32x32.png"
    />
    <link rel="stylesheet" href="custom.css" />
    <title>Formula 1</title>
  </head>
  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-light" style="background-color: #e10600">
      <div class="container-fluid">
        <a class="navbar-brand" href="/apaydink19/index.php">
          <img
            src="https://www.formula1.com/etc/designs/fom-website/images/f1_logo.svg"
            alt=""
            width="90"
            height="60"
          />
          &nbsp &nbsp; Formula 1
        </a>
        <!-- <ul class="navbar-nav flex-row flex-wrap ms-md-auto" id="navbar">
        <li class="nav-item col-md-auto">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php 
                if(!isset($_COOKIE["username"])) {
                    echo "Not Logged In";
                  } else {
                    echo $_COOKIE["username"];
                  }
                ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          </li>
          <li class="nav-item col-md-auto">
            <a href="/apaydink19/lab.php" id="flex_cards" class="nav-link p-2"
              >Lab1</a
            >
          </li>
          <li class="nav-item col-md-auto">
            <a href="/apaydink19/demo.html" id="flex_cards" class="nav-link p-2"
              >Flex Cards</a
            >
            
          </li>
          <li class="nav-item col-6 col-md-auto">
            <a
              id="github"
              class="nav-link p-2"
              href="https://github.com/rbt15/MAT337E"
              target="_blank"
              rel="noopener"
            >
              Source Code
              <i class="bi bi-github" style="font-size: 1rem; color: white"></i>
            </a>
          </li>
        </ul> -->
      </div>
    </nav>
  <div class="login-form" >
      <form method="post" action="handle-login.php">
        <h1>Login</h1>
        <div class="content">
          <div class="input-field">
            <input type="text" placeholder="Email" autocomplete="nope" name="username" />
          </div>
          <div class="input-field">
            <input
              type="password"
              placeholder="Password"
              autocomplete="new-password"
              name="password"
            />
          </div>
          <div class="forgot">
            <a
              href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
              class="link"
              target="_blank"
              >Forgot Your Password?</a
            >
          </div>
        </div>
        <div class="action">
          <button type="submit" name="login_button" value="Login">Sign in</button>
        </div>
      </form>
    </div>
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
} elseif(strlen(trim($_POST["password"])) < 6){
  $password_err = "Password must have atleast 6 characters.";
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
      header('Location: index.php');
  }
  print_r($array);
}
?>
</body>
</html>