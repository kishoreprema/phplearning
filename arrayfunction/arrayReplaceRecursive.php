<?php
# replace the array eith an other array recursivily!
$name1=array("a"=>array("kishore"),"b"=>array("ajith","sabarish"),);
$name2=array("a"=>array("karthi"),"b"=>array("vijay"));
print_r(array_replace_recursive($name1,$name2));
?>

            