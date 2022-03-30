<?php
$regnumber = array("kishore"=>"35", "karthi"=>"57", "ajith"=>"43");
$marks = array("karthi"=>"67","jj"=>"56","ll"=>"36");

 $kishore=(array_merge_recursive($regnumber,$marks));
 asort($kishore);
print_r($kishore);


?>