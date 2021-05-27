<?php 
  // print_r($_POST);
  include 'conn.php';
  if (!empty($_POST)){
    $enjoy = $_POST["Enjoy"];
    $no_text = $_POST["no-text"];
    $compare = $_POST["Compare"];

    $insert="INSERT INTO survey( Enjoy, Text_Area, Compare) 
              VALUES ('$enjoy','$no_text','$compare')";

    $result = mysqli_query($c,$insert);
    if($result != 0){
      header("location: index.php");
    }else{
      echo "<script>window.alet('An Error Occurred')</script>";
    }
  }
?>

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
    <link rel="stylesheet" href="survey.css" />
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
    <!-- Survey part  -->
    <form action="survey.php" method="POST">
    <div class="survey">
      <h3 class="survey-title">SURVEY</h3>
      <span> Do you enjoy coding javascript?</span>
      <div class="btns">
      <label>
        <input required name='Enjoy' id="checkYes" type='radio' value='yes'>
          <span class='btn first'>Yes</span>
        </input>
      </label>
      <label>
        <input name='Enjoy' type='radio' id="checkNo" value='no'>
          <span class='btn first'>No</span>
        </input>
      </label>
      </div>
      <input type="text" id="TextBox" name="no-text" placeholder="Why not?">
      <span class="second">Do you prefer to use PHP over Javascript?</span>
    <div class='btns'>
      <label>
        <input required name='Compare' id="never" type='radio' value='never'>
          <span class='likert btn first'>Never</span>
        </input>
      </label>
      <label>
        <input name='Compare' class="regular" type='radio' value='sometimes'>
          <span class='likert btn'>Sometimes</span>
        </input>
      </label>
      <label>
        <input name='Compare' class="regular" type='radio' value='often'>
          <span class='likert btn'>Often</span>
        </input>
      </label>
      <label>
        <input name='Compare' class="regular" type='radio' value='usually'>
          <span class='likert btn'>Usually</span>
        </input>
      </label>
      <label>
        <input name='Compare' type='radio' id="always" value='always'>
          <span class='likert btn last'>Always</span>
        </input>
      </label>
    </div>
    <button style="margin-top: 25px;" class="btn btn-danger">Send </button>
  </div>
  </form>
  </body>
  <script>
    var inputY = document.getElementById('checkYes');
    var inputN = document.getElementById('checkNo');
    var survey = document.querySelector(".survey")
    var texBox = document.getElementById('TextBox');
    var never = document.getElementById('never');
    var always = document.getElementById('always');
    var likerts = document.querySelectorAll(".likert")
    var regulars = document.querySelectorAll(".regular")


    function handleYes(e) {
      console.log(e);
      if(texBox.classList.contains("hidden"))
        texBox.classList.remove("hidden")
    }
    function handleNo(e) {
      if(!texBox.classList.contains("hidden"))
        texBox.classList.add("hidden")
    }

    function handleNever(){
      survey.style.boxShadow =  "0px 0px 50px 16px red"
      likerts.forEach(likert => {
        if(likert.innerHTML == 'Never')
          likert.style.color = "red";
        else
          likert.style.color = 'black';
      })
    }
    function handleAlways(){
      survey.style.boxShadow =  "0px 0px 50px 16px green"
      likerts.forEach(likert => {
        if(likert.innerHTML == 'Always')
          likert.style.color = "green";
        else
          likert.style.color = 'black';
      })
    }
    function handleRegular() {
      likerts.forEach(likert => likert.style.color = "black")
      survey.style.boxShadow =  "0px 0px 50px 16px black"
    }
    inputY.addEventListener("input", handleYes)
    inputN.addEventListener("input", handleNo)
    never.addEventListener("input", handleNever)
    always.addEventListener("input", handleAlways)
    regulars.forEach(regular => regular.addEventListener("input", handleRegular))
  </script>
</html>