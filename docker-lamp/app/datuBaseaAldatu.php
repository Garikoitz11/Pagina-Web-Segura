<?php
  session_start();

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = new mysqli($hostname,$username,$password,$db);
  
    $conn->set_charset('utf8');

    $Erabiltzailea=$_SESSION['izena'];
    $Izena=$conn->real_escape_string($_POST['izena']);
    $Abizena=$conn->real_escape_string($_POST['abizena']);
    $PostaKodea=$conn->real_escape_string($_POST['posta-kodea']);
    $NAN=$conn->real_escape_string($_POST['NAN']);
    $JaiotzaData=$conn->real_escape_string($_POST['JaiotzaData']);
    $Pasahitza=$conn->real_escape_string($_POST['pasahitza']);
    $PostaElektronikoa=$conn->real_escape_string($_POST['postaElektronikoa']);
    $Mugikorra=$conn->real_escape_string($_POST['mugikorra']);
    
    $kontsultaBerria = $conn->prepare("UPDATE Erregistroa SET Izena = ?, Abizenak = ?, PostaKodea = ?, NAN = ?, JaiotzaData = ?, Pasahitza = ?, PostaElektronikoa = ?, Mugikorra = ? WHERE Erabiltzailea = ?");

    $kontsultaBerria->bind_param('ssissssis', $Izena, $Abizena, $PostaKodea, $NAN, $JaiotzaData, $Pasahitza, $PostaElektronikoa, $Mugikorra, $Erabiltzailea);
    $kontsultaBerria->execute();

    if($kontsultaBerria){
      echo "<script>alert('Erabiltzailea eguneratu da');
      window.location.href='index.html'</script>";
    }
    else{
      echo "<script>alert('Ezin izan da erabiltzailea eguneratu'); window.history.go(-1);</script>";
    }
    
?>
