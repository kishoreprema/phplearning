<?php
# it display every element after the index value!
$name=array("kishore","karthi","ajith","sabarish","vijay");
print_r(array_slice($name,2));
# it works from reverse 
$name=array("kishore","karthi","ajith","sabarish","vijay");
print_r(array_slice($name,-2,1));
?>