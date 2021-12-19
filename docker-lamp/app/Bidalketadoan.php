<?php
session_start();
$GureErabiltzaile = $_SESSION['izena'];

$conexion = mysqli_connect("db", "admin", "test", "database");
$erabiltzaile = "SELECT * FROM Erregistroa WHERE Erabiltzailea = '$GureErabiltzaile'"; 
?>

<!DOCTYPE html>
<html>

<script type="text/javascript">
        function hasi() {
            time= setTimeout('location="cerrarSesion.php"',60000);
        }
        function itxi() {
            clearTimeout(time);
            time= setTimeout('location="cerrarSesion.php"',60000);
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
        echo"<body onload='hasi()' onkeypress='itxi()' onclick='itxi()'>";
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
            <div class="titulillos">Bidalketa doan</div>
            <div class="texto">Bidalketak ordaintzeaz gu arduratuko gara. Horrela zuri guztiz doan aterako zaizu!</div>
        </main>
        <footer>
            <div class="copyright">
                &#169 Todos los Derechos Reservados |<a href="index.php">Gartxon</a>
            </div>
        </footer>
    </body>
</html>
