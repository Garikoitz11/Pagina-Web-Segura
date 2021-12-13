<?php
  session_start();

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    
    $Kodea=$_SESSION['kode'];
    
    $conn = new mysqli($hostname,$username,$password,$db);
  
    $sartu = "DELETE FROM Produktuak WHERE Kodea = '$Kodea'";

    $query = $conn->query($sartu);

    if($query){
      echo "<script>alert('Produktua ezabatu da');
      window.location.href='produktuakKontsultatu.php'</script>";
    }
    else{
      echo "<script>alert('Ezin izan da produktua ezabatu'); window.history.go(-1);</script>";
    }
    
?>
