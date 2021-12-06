<?php
  session_start();

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    
    $Kodea=$_SESSION['kode'];
    
    $conn = mysqli_connect($hostname,$username,$password,$db);
    
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }
  
    $sartu = "DELETE FROM Produktuak WHERE Kodea = '$Kodea'";
   

    $query = mysqli_query($conn, $sartu);

    if($query){
      echo "<script>alert('Produktua ezabatu da');
      window.location.href='produktuakKontsultatu.php'</script>";
    }
    else{
      echo "<script>alert('Ezin izan da produktua ezabatu'); window.history.go(-1);</script>";
    }
?>
