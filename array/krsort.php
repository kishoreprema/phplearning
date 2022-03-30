<?php
$regnumber = array("kishore"=>"35", "karthi"=>"37", "ajith"=>"43");
krsort($regnumber);

foreach($regnumber as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>