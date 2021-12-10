<?php

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

        $hostname = "db";
        $username = "admin";
        $password = "test";
        $db = "database";

        session_start();

        $conn = mysqli_connect($hostname,$username,$password,$db);
        
        $misqli->set_charset('utf8');

        $Erabiltzaile = $mysqli->real_escape_string($_POST['erabiltzaile']);
        $Pasahitza = $mysqli->real_escape_string($_POST['pasahitza']);
        $_SESSION['izena'] = $Erabiltzaile;

        if($kontsultaBerria = $mysqli->prepare("SELECT * FROM Erregistroa WHERE Erabiltzailea = ? AND Pasahitza = ?")){

            $kontsultaBerria->bind_param('ss', $Erabiltzaile, $Pasahitza);
            $kontsultaBerria->execute();
            $emaitza = $kontsultaBerria->get_result();

            if($emaitza->num_rows == 1){
                echo "<script>window.location.href='datuakAldatu.php'</script>";
            }
            else{
                echo "<script>alert('Erabiltzailea ezin izan du saioa hasi');
                window.location.href='index.html'</script>";
            }
            $kontsultaBerria->close();
        }
    }
?>