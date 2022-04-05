<?php
# to display every value in array using while loop and using list and map function!
$a= array("Three", "two", "Four", "five","ten");
while (list ($key, $val) = each ($a))
{
echo $val;
"<br>";
}

# using for loop
$a=array(1,3,5,7,9);
$length=count($a);
 for($i=0;$i<$length;$i++){ 
    echo $a[$i];  
 }
 # using foreach
foreach($a as $value){
    echo $value;
}
?>
