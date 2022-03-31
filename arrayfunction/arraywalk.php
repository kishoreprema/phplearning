<?php
# runs each element in array by user defined function!
function myfunction($value,$key)
{
echo "The key $key has the value $value <br>";
}
$name=array("name"=>"kishore","age"=>"21","number"=>"8270858994");
array_walk($name,"myfunction");
?>