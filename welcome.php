<?php if(!isset($_COOKIE["username"])) {
  header('Location: login.php');
} ?>

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
      </div>
    </nav>
    <h3>
      Hello User : <span style="text-decoration: underline;"> <?php  if($_COOKIE["username"] == "q") echo "Izzet Hoca"; else echo $_COOKIE["username"]; ?></span>
      <br>
      <br>
       Welcome to the TOTAL SUPER SECRET PAGE, only you can see this page (at least i hope so).
    </h3>
    <button type="button" onclick="location.href='/apaydink19/logout.php';" class="btn btn-outline-danger btn-lg">SIGN OUT</button>

    <!-- <a href="logout.php">LOGOUT</a> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
  <style> 
h3{
	font-size: 5vmin;
	margin: 0;
	padding: 0;
	text-align: left;
	font-family: 'Courier New', Courier, monospace;
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translateX(-50%);
}
button{
  position: absolute;
	top: 75%;
	left: 50%;
	transform: translateX(-50%);
}
</style>
</html>