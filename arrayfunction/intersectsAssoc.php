<?php
# check both key and value and return the match!
$name1=array("a"=>"kishore","b"=>"ajith","c"=>"karthi","d"=>"sabarish");
$name2=array("a"=>"kishore","f"=>"ajith","c"=>"karthi");

$result=array_intersect_assoc($name1,$name2);
print_r($result);
?>