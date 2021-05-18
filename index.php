<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
                    <li class="nav-item col-md-auto">
            
            <?php 
                if(!isset($_COOKIE["username"])) {
                    echo '<a class="btn btn-secondary"  href="/apaydink19/login.php" id="loginbtn" class="nav-link p-2"> <svg style="padding-right:15px" width="48px" height="24px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>LOGIN';
                  } else {
                    echo '<a class="btn btn-light" href="/apaydink19/welcome.php" id="loginbtn" class="nav-link p-2"> <svg style="padding-right:15px" width="48px" height="24px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>'.$_COOKIE["username"];
                  }
                ?>
            </a
            >
            
          </li>
        </ul>
      </div>
    </nav>

    <!-- <div class="login-form" >
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
    </div> -->
    <div class="container body-items">
        <div class="cardd">
            <div class="face face1">
                <div class="content">
                    <img src="/apaydink19/img/racing-car.png">
                    <h3>Races</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>For latest race results and schedule for upcoming races.</p>
                        <a href="construction.html">Read More</a>
                </div>
            </div>
        </div>
        <div class="cardd">
            <div class="face face1">
                <div class="content">
                    <img src="/apaydink19/img/helmet.png">
                    <h3>Drivers</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Take informations about all F1 Drivers.</p> 
                        <a href="construction.html">Read More</a>
                </div>
            </div>
        </div>
        <div class="cardd">
            <div class="face face1">
                <div class="content">
                    <img src="/apaydink19/img/newspaper.png">
                    <h3>News</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Read latest news.</p>
                        <a href="construction.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
