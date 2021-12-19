<?php
      
    session_start(); 
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";


    $conn = new mysqli($hostname,$username,$password,$db);

    $conn->set_charset('utf8');

    $Erabiltzaile = $conn->real_escape_string($_POST['erabiltzaile']);
    $Pasahitza = $conn->real_escape_string($_POST['pasahitza']);
    $Data = date("Y-m-d");
    $Hordu = date("H:i:s");
    

    $kontsultaBerria = $conn->prepare("SELECT * FROM Erregistroa WHERE Erabiltzailea = ?");
   
    $kontsultaBerria->bind_param('s', $Erabiltzaile);
    $kontsultaBerria->execute();

    $emaitza = $kontsultaBerria->get_result();
    $PasBilatu = mysqli_fetch_array($emaitza);

    if(($emaitza->num_rows == 1) && (password_verify($Pasahitza, $PasBilatu['Pasahitza']))){
        $_SESSION['izena'] = $Erabiltzaile;
        $kontsultaBerria = $conn->query("INSERT INTO Loga (erabiltzaile, dat, hordua, saioaHasiDa) VALUES ('$Erabiltzaile', '$Data', '$Hordu', True)");
        echo "<script>alert('Ongi etorri $Erabiltzaile');window.location.href='index.php'</script>";
    }
    else{
        $kontsultaBerria = $conn->query("INSERT INTO Loga (erabiltzaile, dat, hordua, saioaHasiDa) VALUES ('$Erabiltzaile', '$Data', '$Hordu', False)");
        echo "<script>alert('Erabiltzailea ezin izan du saioa hasi');
        window.location.href='index.php'</script>";
    }
    $kontsultaBerria->close();
    
?>