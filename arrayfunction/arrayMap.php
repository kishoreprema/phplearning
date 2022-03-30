<?php
function myfunction($value)
{
if ($value==="karthi")
  {
  return "same";
  }
return $value;
}

$name=array("kishore","karthi","ajith");
print_r(array_map("myfunction",$name));
?>