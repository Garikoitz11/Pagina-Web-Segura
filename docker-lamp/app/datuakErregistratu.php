<?php

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = new mysqli($hostname,$username,$password,$db);
    
    /*if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }*/
  
    $conn->set_charset('utf8');

    $Erabiltzailea=$conn->real_escape_string($_POST['erabiltzaile']);
    $Izena=$conn->real_escape_string($_POST['izena']);
    $Abizena=$conn->real_escape_string($_POST['abizena']);
    $PostaKodea=$conn->real_escape_string($_POST['posta-kodea']);
    $NAN=$conn->real_escape_string($_POST['NAN']);
    $JaiotzaData=$conn->real_escape_string($_POST['JaiotzaData']);
    $Pasahitza=$conn->real_escape_string($_POST['pasahitza']);
    $PostaElektronikoa=$conn->real_escape_string($_POST['postaElektronikoa']);
    $Mugikorra=$conn->real_escape_string($_POST['mugikorra']);

    if($kontsultaBerria = $conn->prepare("INSERT INTO Erregistroa (Erabiltzailea, Izena, Abizenak, PostaKodea, NAN, JaiotzaData, Pasahitza, PostaElektronikoa, Mugikorra) VALUES (?,?,?,?,?,?,?,?,?)")){

      $kontsultaBerria->bind_param('sssisissi', $Erabiltzailea, $Izena, $Abizena, $PostaKodea, $NAN, $JaiotzaData, $Pasahitza, $PostaElektronikoa, $Mugikorra);
      $kontsultaBerria->execute();

      if($kontsultaBerria){
        echo "<script>alert('Erabiltzailea erregistratu da');
        window.location.href='index.html'</script>";
      }
      else{
        echo "<script>alert('Beste erabiltzaile izen bat aukeratu'); 
        window.history.go(-1);</script>";
      }
      $kontsultaBerria->close();
    }
?>