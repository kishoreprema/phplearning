<?php
session_start();
$_SESSION['name']="kishore";
echo $_SESSION['name'];
$_SESSION['age']="24";
unset($_SESSION['age']);
echo $_SESSION['age'];
session_destroy();
?>