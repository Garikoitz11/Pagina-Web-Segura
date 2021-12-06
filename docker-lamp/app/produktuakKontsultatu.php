<?php
    $conexion = mysqli_connect("db", "admin", "test", "database");
    mysqli_set_charset($conexion, "utf8");
    $erabiltzaile = "SELECT Kodea, Izena, Prezioa FROM Produktuak"; 

    //session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gartxon S.L</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
        <link rel="stylesheet" type="text/css" href="./CSS/produktuak.css">
        <link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header class="header">
            <br>
            <div class="conimg">
                <a href="index.html" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
            </div>
            <br>
        </header>

        <div class="container-table">
            <div class="table__title">Erabiltzaileen produktuak</div>
            <div class="table__header">Izena</div>
            <div class="table__header">Prezioa</div>
            <div class="table__header"></div>
            <?php $emaitza = mysqli_query($conexion, $erabiltzaile);
            while($row=mysqli_fetch_assoc($emaitza)){?>
            <div class="table__item"><?php echo $row["Izena"];?></div>
            <div class="table__item"><?php echo $row["Prezioa"];?></div>
            <div class="table__item"><a href='produktuOsoa.php?kodea=<?php echo $row["Kodea"];?>'>Informazio gehiago</a></div>
            <?php } mysqli_free_result($emaitza);?>
        </div>

        <footer>
            <div class="copyright">
                &#169 Todos los Derechos Reservados |<a href="index.html">Gartxon</a>
            </div>
        </footer>
    </body>
</html>