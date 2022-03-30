<?php
$name = array("kishore","karthi","ajith");
sort($name);
print_r($name);
echo "<br>";

$arrlength = count($name);
for($x = 0; $x < $arrlength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>