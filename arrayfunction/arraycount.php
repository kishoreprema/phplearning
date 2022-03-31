<?php
# count the number of arrays 
# 0 - does not count all the array ( does not include multidimensation array)
# 1 - count all teh array (include even multidimensational array)
$name=array
  (
  "kishore"=>array
  (
  "03",
  "YAVAR"
  ),
  "karthi"=>array
  (
  "04",
  "YAVAR"
  ),
  "ajith"=>array
  (
  "05"
  )
  );

echo "Normal count: " . count($name,0)."<br>";
echo "Recursive count: " . count($name,1);
?>