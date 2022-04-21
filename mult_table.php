<?php
  echo "<table><tr>";
  //Create Headers
  for ($x=0; $x<=100; $x++) {
    if($x == 0) {
      echo "<th></th>";
    }
    else {
      echo "<td><strong>$x</strong></td>";
    }
  }
  echo "</tr>";
  for($x=1;$x<=100; $x++) {
    echo "<tr>";
      echo "<td>$x</td>";
      for($y=1;$y<=100; $y++) {
          $product = $x*$y;
          echo "<td>$product</td>";
      }
      echo "</tr>";
  }
  echo "</table>";
?>
