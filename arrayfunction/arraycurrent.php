<?php
# some function in array!
$name = array("first", "second", "third", "fourth");

echo current($name) . "<br>"; // The current element is first
echo next($name) . "<br>"; // The next element of Peter is second
echo current($name) . "<br>"; // Now the current element is second
echo prev($name) . "<br>"; // The previous element of Joe is first
echo end($name) . "<br>"; // The last element is fourth
echo prev($name) . "<br>"; // The previous element of fourth is third
echo current($name) . "<br>"; // Now the current element is third
echo reset($name) . "<br>"; // Moves the internal pointer to the first element of the array, which is first
echo next($name) . "<br>"; // The next element of first is second
?>

