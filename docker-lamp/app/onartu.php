<?php
    session_start();
    $_SESSION['Erabiltzaile'] = $Izena;
    header("Location:produktuOsoa.php");
?>