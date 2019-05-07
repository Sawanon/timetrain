<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Timetrain</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
    table{
      text-align: center;
    }
      td{
        width: 50px;
      }
    </style>
  </head>
  <body>
    <?php
    $pm = ["เมษายน","พฤษภาคม","มิถุนายน"];
    $fp = fopen("data.txt","r");
    if($fp){
      $m = 0;
      $c = 0;
      $hd = 0;
      while (!feof($fp)) {
        $data = @fgetc($fp);
        if($c<2){
          $check[$pm[$hd]][0] .= $data;
          $c++;
        }else if($data=="-"){
          $c++;
        }else if($c>2 && $c<5){
          $check[$pm[$hd]][1] .= $data;
          $c++;
        }else if($c==5){
          $check[$pm[$hd]][2] = $data;
          $c++;
        }else if($data==";"){
          $hd++;
          $c=0;
        }else{
          if($data=="/"){
          }else{
            if($m%2!=0){
              $day[$pm[$hd]][$m-1] .= $data;
            }else{
              $day[$pm[$hd]][$m] = $data;
            }
            $m++;
          }
        }
        echo " [-".$c."-".$data."-".$c."-] ";
      }
    }
    echo "<br>";
    echo "<br>day ";
    print_r($day);
    echo "<br>";
    echo "<br>check ";
    print_r($check);
    for($j=0;$j<3;$j++){
      $dayt = 0;
      $maxday = $check[$pm[$j]][1];
      $startday = $check[$pm[$j]][2];
      $count = 0;
      $dayshow = 1;
      echo "<table border='1'>";
      echo "<tr><th colspan='7'>".$pm[$j]."</th></tr>";
      for($i=0;$i<$maxday;$i++) {
        $count++;
        $dayt++;
        if($count==8){
          echo "</tr>";
          $count = 0;
          $i=$i-1;
        }else if($count>0 && $count<8){
          if($startday<=$dayt){
            if($datshow[$pm[$j]][sdas]==$)
            echo "<td>".$dayshow."</td>";
            $dayshow++;
          }else{
            echo "<td></td>";
            $i=$i-1;
          }
        }else{
          echo "<tr>3";
          $i--;
        }
      }
      echo "</table><br>";
    }
    ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
