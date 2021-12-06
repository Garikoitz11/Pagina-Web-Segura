<?php
  session_start();

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    
    $Kodea=$_SESSION['kode'];
    $Izena=$_POST['izena'];
    $Mota=$_POST['mota'];
    $Deskribapena=$_POST['deskribapena'];
    $Prezioa=$_POST['prezio'];
    
    $conn = mysqli_connect($hostname,$username,$password,$db);
    
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }
  
    $sartu = "UPDATE Produktuak SET Izena = '$Izena', Mota = '$Mota', Deskribapena = '$Deskribapena', Prezioa = '$Prezioa' WHERE Kodea = '$Kodea'";
   

    $query = mysqli_query($conn, $sartu);

    if($query){
      echo "<script>alert('Produktua eguneratu da');
      window.location.href='produktuakKontsultatu.php'</script>";
    }
    else{
      echo "<script>alert('Ezin izan da produktua eguneratu'); window.history.go(-1);</script>";
    }
?>
