<?php
# check the matches and return it.
$name1=array( "a"=>"kishore","b"=>"karthi","c"=>"ajith");
$name2=array("a"=>"kishore","b"=>"karthi","c"=>"sabarish");

$result=array_intersect($name1,$name2);
print_r($result);
?>