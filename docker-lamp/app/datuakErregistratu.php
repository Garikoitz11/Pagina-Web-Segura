<?php

  $conn = new mysqli('db','admin','test','database');

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

  $kontsultaBerria = $conn->query("INSERT INTO Erregistroa VALUES ('$Erabiltzailea', '$Izena', '$Abizena', '$PostaKodea', '$NAN', '$JaiotzaData', '$Pasahitza', '$PostaElektronikoa', '$Mugikorra')");

  if($kontsultaBerria){
    echo "<script>alert('Erabiltzailea erregistratu da');
    window.location.href='index.html'</script>";
  }
  else{
    echo hola;
    echo "<script>alert('Beste erabiltzaile izen bat aukeratu'); 
    window.history.go(-1);</script>";
  }
?>