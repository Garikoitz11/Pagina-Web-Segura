<?php

    $conn = new mysqli('db','admin','test','database');

    $conn->set_charset('utf8');

    $Izena = $conn->real_escape_string($_POST['izena']);
    $Mota = $conn->real_escape_string($_POST['mota']);
    $Deskribapena = $conn->real_escape_string($_POST['deskribapena']);
	$Prezioa = $conn->real_escape_string($_POST['prezio']);

    if($kontsultaBerria = $conn->prepare("INSERT INTO Produktuak (Izena, Mota, Deskribapena, Prezioa) VALUES (?, ?, ?, ?)")){

        $kontsultaBerria->bind_param('sssd', $Izena, $Mota, $Deskribapena, $Prezioa);
        $kontsultaBerria->execute();
       
        if($kontsultaBerria){
            echo "<script>alert('Produktua igo da');
            window.location.href='index.php'</script>";
        }
        else{
            echo "<script>alert('Ezin izan da produktua igo');
            window.history.go(-1);</script>";
        }
        $kontsultaBerria->close();
    }

?>