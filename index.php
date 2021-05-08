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
        <a class="navbar-brand" href="#">
          <img
            src="https://www.formula1.com/etc/designs/fom-website/images/f1_logo.svg"
            alt=""
            width="90"
            height="60"
          />
          &nbsp &nbsp; Formula 1
        </a>
        <ul class="navbar-nav flex-row flex-wrap ms-md-auto" id="navbar">
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
        </ul>
      </div>
    </nav>

    <div class="login-form" >
      <form method="post" action="login.php">
        <h1>Login</h1>
        <div class="content">
          <div class="input-field">
            <input type="email" placeholder="Email" autocomplete="nope" name="username" />
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
          <button type="submit" name="signup_button" value="Signup">Register</button>
          <button type="submit" name="login_button" value="Login">Sign in</button>
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>