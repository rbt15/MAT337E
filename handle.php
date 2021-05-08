<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="5;url=https://web.itu.edu.tr/apaydink19/07.php">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php extract($_POST) ?>
</head>
<body>
  <h3>This page will automatically be closed after 10 seconds... </h3>
</br>
  <h3>Thank you for cooperation</h3>

  <pre>
   <?php // print_r($_POST); ?>
  </pre>
  <div>
    <div class="data">

      <?php foreach ($_POST as $key => $value) {
        echo $key." = ".$value."</br>";
      }; 
      ?>
    </div>
  </div>
</body>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
  .data{ 
    font-size: 32px;
    display: flex;
    margin-left: 100px;
  
  }
</style>
</html>