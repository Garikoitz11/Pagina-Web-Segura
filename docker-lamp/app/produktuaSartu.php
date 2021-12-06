<?php 
    $hostname = "db";
	$username = "admin";
	$password = "test";
	$db = "database";

	$Izena = $_POST['izena'];
	$Mota = $_POST['mota'];
	$Deskribapena = $_POST['deskribapena'];
	$Prezioa = $_POST['prezio'];
	
	$conn = mysqli_connect($hostname,$username,$password,$db);
	
	if ($conn->connect_error) {
      		die("Database connection failed: " . $conn->connect_error);
    }
    	
    $sartu = "INSERT INTO Produktuak (Izena, Mota, Deskribapena, Prezioa) VALUES ('$Izena', '$Mota', '$Deskribapena', '$Prezioa')";
    
    $query = mysqli_query($conn, $sartu);
    
    if($query){
        echo "<script>alert('Produktua igo da');
        window.location.href='index.html'</script>";
    }
    else{
        echo "<script>alert('Ezin izan da produktua igo');
        window.history.go(-1);</script>";
    }
?>