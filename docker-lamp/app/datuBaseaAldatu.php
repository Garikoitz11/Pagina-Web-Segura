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
    $Bankua=$conn->real_escape_string($_POST['datuBankarioak']);
    $BankuDekode = base64_encode($Bankua);
    
    $kontsultaBerria = $conn->query("UPDATE Erregistroa SET Izena = '$Izena', Abizenak = '$Abizena', PostaKodea = '$PostaKodea', NAN = '$NAN', JaiotzaData = '$JaiotzaData', PostaElektronikoa = '$PostaElektronikoa', Mugikorra = '$Mugikorra', BankuDatuak = '$BankuDekode' WHERE Erabiltzailea = '$Erabiltzailea'");

    if(!empty($Pasahitza)){
      $PasZifratuta=password_hash($Pasahitza,PASSWORD_BCRYPT);
      mysqli_query($conn, "UPDATE Erregistroa SET Pasahitza= '$PasZifratuta' WHERE Erabiltzailea = '$Erabiltzailea'")
      or die (mysqli_error($conn));
    }

    if($kontsultaBerria){
      echo "<script>alert('Erabiltzailea eguneratu da');
      window.location.href='index.php'</script>";
    }
    else{
      echo "<script>alert('Ezin izan da erabiltzailea eguneratu'); window.history.go(-1);</script>";
    }
    
?>
