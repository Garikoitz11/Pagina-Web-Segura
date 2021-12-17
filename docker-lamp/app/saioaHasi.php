<?php
 
    #if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        #para comprobar que es una peticion ajax?
       
        $hostname = "db";
        $username = "admin";
        $password = "test";
        $db = "database";
        $db2 = "log";

        session_start();

        $conn = new mysqli($hostname,$username,$password,$db);
        $conn2 = new mysqli($hostname,$username,$password,$db2);

        $conn->set_charset('utf8');
        $conn2->set_charset('utf8');

        $Erabiltzaile = $conn->real_escape_string($_POST['erabiltzaile']);
        $Pasahitza = $conn->real_escape_string($_POST['pasahitza']);
        $Data = date("Y-m-d");
        $Hordu = date("H:i:s");

        $kontsultaBerria = $conn->prepare("SELECT * FROM Erregistroa WHERE Erabiltzailea = ? AND Pasahitza = ?");
        $kontsulta2 = $conn2->query("INSERT INTO Loga (erabiltzaile, dat, hordua) VALUES ('$Erabiltzaile', '$Data', '$Hordu')");

        $kontsultaBerria->bind_param('ss', $Erabiltzaile, $Pasahitza);
        $kontsultaBerria->execute();

        $emaitza = $kontsultaBerria->get_result();

        if($emaitza->num_rows == 1){
            //echo "<script>window.location.href='datuakAldatu.php'</script>";
            $_SESSION['izena'] = $Erabiltzaile;
            $_SESSION['denbora'] = time();
            echo "<script>alert('Ongi etorri $Erabiltzaile');window.location.href='index.php'</script>";
            

        }
        else{
            echo "<script>alert('Erabiltzailea ezin izan du saioa hasi');
            window.location.href='index.php'</script>";
        }
        $kontsultaBerria->close();
        
        
    #}
?>