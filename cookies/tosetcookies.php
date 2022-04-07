<?php
$name="kishore";
$age="21"; 
setcookie($name,$age,time()+86400*30,"/"); # time()-current time , 3600 - expire time - "/"-cookies will be in every webpage.
if(!isset($_COOKIE[$name]))
{
   echo "not set";
}
else
{
    echo "set =".$_COOKIE[$name];
}
