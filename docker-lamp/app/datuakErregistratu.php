<?php

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $Erabiltzailea=$_POST['erabiltzaile'];
    $Izena=$_POST['izena'];
    $Abizena=$_POST['abizena'];
    $PostaKodea=$_POST['posta-kodea'];
    $NAN=$_POST['NAN'];
    $JaiotzaData=$_POST['JaiotzaData'];
    $Pasahitza=$_POST['pasahitza'];
    $PostaElektronikoa=$_POST['postaElektronikoa'];
    $Mugikorra=$_POST['mugikorra'];
    
    
    $conn = mysqli_connect($hostname,$username,$password,$db);
    
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }
  
    $sartu = "INSERT INTO Erregistroa VALUES ('$Erabiltzailea','$Izena','$Abizena','$PostaKodea','$NAN','$JaiotzaData','$Pasahitza','$PostaElektronikoa','$Mugikorra')";
    
    $query = mysqli_query($conn, $sartu);

    if($query){
      echo "<script>alert('Erabiltzailea erregistratu da');
      window.location.href='index.html'</script>";
    }
    else{
      echo "<script>alert('Beste erabiltzaile izen bat aukeratu'); window.history.go(-1);</script>";
    }
?>