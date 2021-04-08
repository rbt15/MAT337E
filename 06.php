
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="icon" type="image/x-icon" href="https://iconhandbook.co.uk/favicon.ico" />
    
</head>
<body>
    
    <?php

        setlocale(LC_ALL,'tr_TR.UTF-8');


        $f = fopen("06_data/course.txt",'r') or die("açamadım.");
        while (!feof($f)) {
            $row = fgets($f);
            $All[] = $row;
            $rowArray = explode("\t", $row);
            $Id[] = $rowArray[1];
            $Name[] = $rowArray[2];
            $LastName[] = $rowArray[3];
        }
        fclose($f);
        array_multisort($LastName,SORT_LOCALE_STRING ,$Name, SORT_LOCALE_STRING, $Id , $All);
        // foreach ($All as $value){
        //     echo $value."</br>";
        // }
        $vfFile = fopen("06_data/vf.txt", "r") or die("Unable to open file!");
        while(!feof($vfFile)) {
            $ROW1=fgets($vfFile);
            $ALL1[]=$ROW1;
          }
        fclose($vfFile);
        echo "<section>";
        echo '<table>';
        echo '<thead>
                <tr>
                <th>#</th>
                <th>CRN</th>
                <th>NUMBER</th>
                <th>FIRST</th>
                <th>LAST</th>
                <th>CODE</th>
                <th>INST</th>
                </tr>
              </thead>';
        echo '<tbody>';
        $ALL1=array_map("trim",$ALL1);
        foreach($All as $index=>$value){
            $value=explode ("\t",$value);
            if(in_array($value[1],$ALL1)){
            echo '<tr class="strikeout">
            <th scope="row">'.($index+1).'</th>
            <td>'.$value[0].'</td>
            <td>'.$value[1].'</td>
            <td>'.$value[2].'</td>
            <td>'.$value[3].'</td>
            <td>'.$value[4].'</td>
            <td>'.$value[5].'</td>
          </tr>';
            }
            else{
                echo '<tr>
                <th scope="row">'.($index+1).'</th>
                <td>'.$value[0].'</td>
                <td>'.$value[1].'</td>
                <td>'.$value[2].'</td>
                <td>'.$value[3].'</td>
                <td>'.$value[4].'</td>
                <td>'.$value[5].'</td>
              </tr>';
            }
        }
        echo '</tbody>';
        echo '</table>';
        echo "</section>";
    ?>
</body>
<style>
    section { 
        display :flex;
        align-items : center;justify-content : center;
    }
    table { 
        border-collapse:collapse; 
        border-spacing:2em;
        border: solid 1px #000; 
        empty-cells: show; 
    }

    td { position: relative; }

    tr.strikeout td:before {
        content: " ";
        position: absolute;
        top: 50%;
        left: 0;
        border-bottom: 5px solid rgb(255,0,0, .5);
        width: 100%;
    }

    tr.strikeout td:after {
        content: "\00B7";
        font-size: 1px;
    }
    td { width: 180px; }
    th { text-align: left; }
    tr:nth-child(even) {background: #fff}
    tr:nth-child(odd) {background: #cfd3ce}
    body{ 
        font-size : 20px;
    }
</style>
</html>