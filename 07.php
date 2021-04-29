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
    <?php ?>
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

    <div class="login-form">
      <form action="handle.php" method="post">
        <h3>Survey</h3>
        <h5>Who do you think will win this weekend?</h5>
        <div class="content">
          <div class="input-field">
            <input type="email" name="email" placeholder="Email" autocomplete="nope" required="true"/>
          </div>
          <div class="input-field">
            <input
              type="number"
              name="age"
              placeholder="Age"
              required="true"
              min="18"
            />
          </div>
          <div class="input-field">
          <label for="cars">Your Decision</label>
          <select id="cars" name="cars">
            <option value="mercedes">mercedes</option>
            <option value="ferrari">ferrari</option>
            <option value="aston martin">aston martin</option>
            <option value="red bull">red bull</option>
          </select>
          </div>
        </div>
        <div class="action">
          <button type="submit">SEND</button>
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
