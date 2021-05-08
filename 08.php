<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student List</title>
</head>
<body>
  <?php
    include "conn.php";
    $table = mysqli_query($c,"SELECT student.id,grades.grade,student.fname,student.lname,student.ituname,student.dept,student.topic 
                              FROM student INNER JOIN grades ON student.id = grades.id
                              ORDER BY grades.grade DESC;");
    
    $n = mysqli_fetch_row(mysqli_query($c,"SELECT count(id) FROM grades WHERE grade>0;"))[0];

    $mu = mysqli_fetch_row(mysqli_query($c,"SELECT avg(grade) FROM grades WHERE grade>0;"))[0];
    
    $grades_table = mysqli_query($c,"SELECT grade FROM grades WHERE grade>0;");
    
    $grades = array();
    
    while($row = mysqli_fetch_array($grades_table)) 
      $grades[] = $row[0];

    $sigma = StandardDeviation($grades, $mu ,$n);
    
    $var = round(array_sum(array_map(function ($x) use ($mu) { 
      return pow($x - $mu, 2);
    }, $grades)) / $n,3);

    echo "<section>";

    // STATS TABLE
    echo '<table class="container"> <caption>Stats Table</caption>
      <tr><th>Course Name</th> <th>Count</th> <th>Mean</th> <th>Std Deviation</th> <th>Variance</th> </tr>';
      echo "<tr> <td>MAT 337E</td> <td>$n</td> <td>$mu</td> <td>$sigma</td> <td>$var</td> </tr>";
    echo '</table>';

    // STUDENTS TABLE
    echo '<table class="container"> <caption>Student List</caption>
      <tr><th>School No.</th> <th>Grade</th> <th>FirstName</th> <th>LastName</th> <th>username</th> <th>Dept</th> <th>Topic</th> </tr>';
    
      while ($array = mysqli_fetch_row($table)) {
      echo '<tr>';
      foreach ($array as $key => $value)
        echo '<td>'.$value.'</td>';
      echo '</tr>';
    }
    echo '</table>';
    echo "</section>";


    mysqli_close($c);
    function StandardDeviation(array $data, $mean, $dataSize){
      $sumDeviation = 0.0;
      for ($i = 0; $i < $dataSize; $i++)
        $sumDeviation += ($data[$i] - $mean) * ($data[$i] - $mean);
      return round(sqrt($sumDeviation / $dataSize), 3);
    }
  ?>



</body>
<style>
@import url("https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&display=swap");
body {
  padding: 0;
  margin: 0;
  background-color: #17141d;
  color: white;
  font-family: "DM Mono", monospace;
}
section{
  padding-top: 3%;
}

.container {
  text-align: left;
  overflow: hidden;
  width: 80%;
  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
  width: 55%;
}

.container td, .container th {
  padding-bottom: 2%;
  padding-top: 2%;
  padding-left:2%;  
}

.container tr:nth-child(odd) {
	  background-color: #323C50;
}

.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
  background-color: #464A52;
  -webkit-box-shadow: 0 6px 6px -6px #0E1119;
  -moz-box-shadow: 0 6px 6px -6px #0E1119;
  box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
  transition-timing-function: line;
}
caption{
  padding: 10px;
}
</style>
</html>