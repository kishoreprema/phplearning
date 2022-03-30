<?php
# combine two array by the key name!
$name1=array("a"=>"kishore","b"=>"ajith");
$name2=array("c"=>"karthi","b"=>"sabarish");
print_r(array_merge_recursive($name1,$name2));
?>