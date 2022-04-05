<?php 
# print an backslash before the specified character!
$name = addcslashes("HI KISHORE!","K");
echo($name); 
# print an backslash before certain character!
$str = "Welcome to my humble Homepage!";
echo $str."<br>";
echo addcslashes($str,'m')."<br>";
echo addcslashes($str,'H')."<br>";

# print the backslash for range of character!
$str = "Welcome to my humble Homepage!";
echo $str."<br>";
echo addcslashes($str,'A..Z')."<br>";
echo addcslashes($str,'a..z')."<br>";
echo addcslashes($str,'a..g');
?>