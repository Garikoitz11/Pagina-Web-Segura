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
    

    $kontsultaBerria = $conn->prepare("SELECT * FROM Erregistroa WHERE Erabiltzailea = ? AND Pasahitza = ?");
   
    $kontsultaBerria->bind_param('ss', $Erabiltzaile, $Pasahitza);
    $kontsultaBerria->execute();

    $emaitza = $kontsultaBerria->get_result();
    //$_SESSION['izena'] = $Erabiltzaile;
    if($emaitza->num_rows == 1){
        //echo "<script>window.location.href='datuakAldatu.php'</script>";
        $_SESSION['izena'] = $Erabiltzaile;
        //$_SESSION['denbora'] = time();
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