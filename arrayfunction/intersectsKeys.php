<?php
# check the key matches and display it!
$name1=array("a"=>"karthi","b"=>"kishore","c"=>"ajith");
$name2=array("a"=>"ajith","c"=>"karthi","d"=>"kishore");

$result=array_intersect_key($name1,$name2);
print_r($result);
?>