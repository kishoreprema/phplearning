<?php
# compare the both key and values, and gives the difference.
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
?>