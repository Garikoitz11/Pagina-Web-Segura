<?php
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $Erabiltzaile = $_POST['erabiltzaile'];
    $Pasahitza = $_POST['pasahitza'];

    session_start();
    $_SESSION['izena'] = $Erabiltzaile;

    $conn = mysqli_connect($hostname,$username,$password,$db);
    
    $query = mysqli_query($conn, "SELECT * FROM Erregistroa WHERE Erabiltzailea = '$Erabiltzaile' AND Pasahitza = '$Pasahitza'")
       or die (mysqli_error($conn));
    
    $filas=mysqli_num_rows($query);
    
    if($filas){
        
        //header("location:home.php");
        echo "<script>window.location.href='datuakAldatu.php'</script>";
    
    }else{
       
        //include("Erregistroa.html");
        echo "<script>alert('Erabiltzailea ezin izan du saioa hasi');
        window.location.href='index.html'</script>";
    
        
        //<h1 class="bad">ERABILTZAILE EDO PASAHITZA OKERRAK</h1>
       
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>