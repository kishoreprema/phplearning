<?php
# remove the element and insert the element / user acn intimate the index where thw value to be inserted.
$name1=array("a"=>"kiahore","b"=>"ajith","c"=>"karthi","d"=>"sabarish");
$name2=array("a"=>"vijay","b"=>"manoj");
array_splice($name1,0,2,$name2);
print_r($name1);
?>
