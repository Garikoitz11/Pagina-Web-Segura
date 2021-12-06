<?php
  session_start();

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $Erabiltzailea=$_SESSION['izena'];
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
  
    $sartu = "UPDATE Erregistroa SET Izena = '$Izena', Abizenak = '$Abizena', PostaKodea = '$PostaKodea', NAN = '$NAN', JaiotzaData = '$JaiotzaData', Pasahitza = '$Pasahitza', PostaElektronikoa = '$PostaElektronikoa', Mugikorra = '$Mugikorra' WHERE Erabiltzailea = '$Erabiltzailea'";
   

    $query = mysqli_query($conn, $sartu);

    if($query){
      echo "<script>alert('Erabiltzailea eguneratu da');
      window.location.href='index.html'</script>";
    }
    else{
      echo "<script>alert('Ezin izan da erabiltzailea eguneratu'); window.history.go(-1);</script>";
    }
?>
