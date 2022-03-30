<?php
$name = array (
  array("kishore",34),
  array("karthi",34),
  array("ajith",35),
  
);
    
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$name[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>