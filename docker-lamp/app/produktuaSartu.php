<?php

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);

    $conn->set_charset('utf8');

    $Izena = $conn->real_escape_string($_POST['izena']);
    $Mota = $conn->real_escape_string($_POST['mota']);
    $Deskribapena = $conn->real_escape_string($_POST['deskribapena']);
	$Prezioa = $conn->real_escape_string($_POST['prezio']);

    if($kontsultaBerria = $conn->prepare("INSERT INTO Produktuak (Izena, Mota, Deskribapena, Prezioa) VALUES (?, ?, ?, ?)")){

        $kontsultaBerria->bind_param('sssd', $Izena, $Mota, $Deskribapena, $Prezioa);
        $kontsultaBerria->execute();
        $emaitza = $kontsultaBerria->get_result();

        if($emaitza){
            echo "<script>alert('Produktua igo da')";
        }
        else{
            echo "<script>alert('Ezin izan da produktua igo');
            window.history.go(-1);</script>";
        }
        $kontsultaBerria->close();
    }

?>