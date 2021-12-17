<?php

session_start();
unset($_SESSION['izena']);
session_destroy();

header("location: index.php");

//exit();

?>


 