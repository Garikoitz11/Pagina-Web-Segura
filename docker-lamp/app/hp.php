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
        <link rel="stylesheet" type="text/css" href="CSS/bakoitza.css">
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
            <div class="container logo-nav-container">
                <a href="index.php" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
                <nav class="navigation">
                    <ul>
                        <?php

                        $Erabiltzaile = $_SESSION['izena'] ;

                        if ($Erabiltzaile == null || $Erabiltzaile == '') {
                        //echo '<a href="cerrarSesion.php" target="_self" class= "hola"> SALIR </a>';
                        ?>
                        <li><a href="erregistratu.php" target="_self" >ERREGISTRATU</a></li>
                        <li><a href="Hasisaioa.php" target="_self" >HASI SAIOA</a></li>
                        <?php
                        }else{
                        //echo '<a href="erregistratu.php" target="_self" class= "hola">ERREGISTRATU</a>';
                        //echo '<a href="Hasisaioa.php" target="_self" class= "hola">HASI SAIOA</a>';
                        ?>
                        <li><a href="cerrarSesion.php" target="_self" > SAIOA ITXI </a></lio>
                  <?php  }
                        ?>
                        <!-- <li><a href="cerrarSesion.php" target="_self"> SALIR</a></li> 
                        <li><a href="erregistratu.php" target="_self">ERREGISTRATU</a></li> 
                        <li><a href="Hasisaioa.php" target="_self">HASI SAIOA</a></li> 
                    </ul> -->
                </nav>                    
            </div>
        </header>
        <main> 
        <div class="titulo"> HP BS017</div>
        
        <nav class="columnas">   
        <p> <div class="foto"><img src="irudiak/hpbs017.jpg" width="250px" alt="HP BS017"> </div></p>
        <p>
        <div class="cuerpo1"><strong>Sistema operatiboa:</strong>&nbsp;Microsoft Windows</div>
        <div class="cuerpo"><strong>RAM:</strong>&nbsp;4GB</div>
        <div class="cuerpo"><strong>Prezioa:</strong>&nbsp;999€</div><br>
        <input class="erosi" type="submit" value="erosi" onclick = "alert('Produktua erosi duzu.');window.location.href='index.php'"/>
        
        </p>

        </nav>
        </main>
        
        <footer class="footer-container">
            <div class="ultimos-botones">
                
                    <ul>
                        <li><a href="Erosketabaldintzak.php" target="_self">Erosketa baldintzak</a></li>
                        <li><a href="https://twitter.com/gartxon?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @gartxon</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                    </ul>
            </div>
            <div class="footer-container">
                <div class="img">
                    <img src="irudiak/footer1.png" style="width:100%" alt="Ordainketa segurua">
                </div>
                <div class="copyright">
                    &#169 Todos los Derechos Reservados |<a href="#">Gartxon</a>
                </div>
            </div>
        </footer>
    </body>
</html>

