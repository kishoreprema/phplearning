
<?php
# compare the valuse and shows the result.
$name1=array("a"=>"kishore","b"=>"karthi","c"=>"ajith","d"=>"sabarish");
$subname2=array("e"=>"kishore","f"=>"karthi","g"=>"ajith");

$result=array_diff($name1,$subname2);
print_r($result);
?>