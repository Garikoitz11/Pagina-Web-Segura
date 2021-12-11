<?php
  session_start();

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    
    $conn = new mysqli($hostname,$username,$password,$db);

    $conn->set_charset('utf8');

    $Kodea=$conn->real_escape_string($_SESSION['kode']);
    $Izena=$conn->real_escape_string($_POST['izena']);
    $Mota=$conn->real_escape_string($_POST['mota']);
    $Deskribapena=$conn->real_escape_string($_POST['deskribapena']);
    $Prezioa=$conn->real_escape_string($_POST['prezio']);
    
    /*if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }*/
    if($kontsultaBerria = $conn->prepare("UPDATE Produktuak SET Izena = ?, Mota = ?, Deskribapena = ?, Prezioa = ? WHERE Kodea = ?")){
      $kontsultaBerria->bind_param('sssdi', $Izena, $Mota, $Deskribapena, $Prezioa, $Kodea);
      $kontsultaBerria->execute();

      if($kontsultaBerria){
        echo "<script>alert('Produktua eguneratu da');
        window.location.href='produktuakKontsultatu.php'</script>";
      }
      else{
        echo "<script>alert('Ezin izan da produktua eguneratu'); window.history.go(-1);</script>";
      }
    }
?>
