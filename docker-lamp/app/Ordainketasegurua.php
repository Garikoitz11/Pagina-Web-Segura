<?php
session_start();
$GureErabiltzaile = $_SESSION['izena'];

$conexion = mysqli_connect("db", "admin", "test", "database");
$erabiltzaile = "SELECT * FROM Erregistroa WHERE Erabiltzailea = '$GureErabiltzaile'"; 

/*if(isset($_SESSION['denbora']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 5;//20min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['denbora'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            echo "<script>alert('Saioa itxi egin da');window.location.href='index.php'</script>";       
            exit();
        }
}*/

header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
        function start() {
            time= setTimeout('location="cerrarSesion.php"',10000);
        }
        function salir() {
            clearTimeout(time);
            time= setTimeout('location="cerrarSesion.php"',10000);
        }
    </script>
    <head>
        <title>Gartxon S.L.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/4fotos.css">
        <link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">
    </head>
    <?php

    if(isset($_SESSION['izena'])) {
        echo"<body onload='start()' onkeypress='salir()' onclick='salir()'>";
    } else {
        echo"<body>";
    }
    ?>
        <header class="header">
            <br>
            <div class="conimg">
                <a href="index.php" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
            </div>
            <br>
        </header>
        <main>
            <div class="titulillos">Segurua al da?</div>
            <div class="texto"> Zure eskari guztien, fakturazio datuen eta bidalketen gaineko segurtasuna gordetzeko, kodetze industrial estandarrerako protokoloa erabiltzen dugu; hauek dira protokolo horren siglak: SSL (Secure Sockets Layer edo Konexio Segururako Geruza Protokoloa euskaraz).<br><br>

                Egiazta dezakezu zure nabigatzailea segurua dela giltzarrapoaren sinboloa agertzen bada eta ikus dezakezu, era berean, URLa zertxobait aldatu dela: ez da http hasten, https baizik.<br><br>

                Petritegik aukera ematen du txartelarekin ordaintzeko segurtasuna maximoa da. Gogoratu segurua ez balitz Petritegik ez lizukeela eskainiko.<br><br>

                Zalantzarik baduzu edo zeozer galdetu nahi badiguzu, gurekin egon besterik ez duzu: gartxon@gmail.com. Zeharo zure esanera gaude!</div>
        </main> 
        <footer>
            <div class="copyright">
                &#169 Todos los Derechos Reservados |<a href="index.php">Gartxon</a>
            </div>
        </footer>  
    </body>
</html>
