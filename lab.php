<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Lab</title>
  <link rel="stylesheet" href="php.css" />
</head>
<body>
  <?php

    $strJsonFileContents = file_get_contents("fake.json");

    $array = json_decode($strJsonFileContents, true);
    // echo "<pre>";
    // var_dump($array);
    // echo "</pre>";
    foreach ($array as $key => $value) {
      echo "
      <article class=\"card\">
      <header class=\"card-header\">
        <p>March 25th 2021</p>
        <h2>".$value['title']."</h2>
      </header>
  
      <div class=\"card-author\">
  
        <div class=\"author-name\">
          <div class=\"author-name-prefix\">".$value[body]."</div>
          <div class=\"author-name-suffix\">
          Kıraç Acar Apaydın
        </div>
       </div>
      </div>
    </article>
  ";
  }

  ?>
</body>
</html>