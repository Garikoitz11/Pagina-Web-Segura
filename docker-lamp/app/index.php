<?php
session_start();

if(isset($_SESSION['denbora'])) {
    
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

}

header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gartxon S.L.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header class="header">
            <div class="container logo-nav-container">
                <a href="index.php" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
                <nav class="navigation">
                    <ul>
                        <?php

                        //$Erabiltzaile = $_SESSION['izena'] ;

                        if (isset($_SESSION['izena'])) {
                        //echo '<a href="cerrarSesion.php" target="_self" class= "hola"> SALIR </a>';
                        ?>
                        <li><a href="cerrarSesion.php" target="_self" > SAIOA ITXI</a></li>
                        <?php
                        }else{
                        //echo '<a href="erregistratu.php" target="_self" class= "hola">ERREGISTRATU</a>';
                        //echo '<a href="Hasisaioa.php" target="_self" class= "hola">HASI SAIOA</a>';
                        ?>
                        <li><a href="erregistratu.php" target="_self" >ERREGISTRATU</a></li>
                        <li><a href="Hasisaioa.php" target="_self" >HASI SAIOA</a></li>
                  <?php  }
                        ?>
                        <!-- <li><a href="cerrarSesion.php" target="_self"> SALIR</a></li> 
                        <li><a href="erregistratu.php" target="_self">ERREGISTRATU</a></li> 
                        <li><a href="Hasisaioa.php" target="_self">HASI SAIOA</a></li> 
                    </ul> -->
                </nav>                                  
            </div>
        </header>

        <main class="main">
            <div class="container">
                <div class="column menu">
                <nav>
                        <ul>
                            <li><a href="index.php" target="_self">Gure produktuak</a></li>        
                            <li><a href="produktuakKontsultatu.php" target="_self">Erabiltzaileen produktuak</a></li>
                            <li><a href="sartuProduktua.php" target="_self">Sartu produktuak</a></li>
                            <?php
                            if ($Erabiltzaile != null || $Erabiltzaile != '') {
                            ?>
                                <li><a href="datuakAldatu.php" target="_self">Zure datuak aldatu</a></li>
                            <?php } ?>

                        </ul>
                    </nav>
                </div>
            </div>
            <h1>GURE PRODUKTUAK</h1>
            <hr>
            <section class="products-list">
                <div class="product-item">
                    <img src="irudiak/iphonexrmax.jpg" alt="Iphone XS Max"></a>
                    <a href="IphoneXSMax.php">Iphone XS Max</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/pc1.jpg" alt="Platinum RTX"></a>
                    <a href="PlatinumRX.php">Platinum RTX</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/huaweimate20pro.jpg" alt="Huawei Mate 20 Pro"></a>
                    <a href="HuaweiMate20Pro.php">Huawei Mate 20 Pro</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/canoneos.jpg" alt="Canon EOS 200D"></a>
                    <a href="canoneos.php">Canon EOS 200D</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/xiaomiredminote5.jpg" alt="Xiaomi Redmi Note 5"></a>
                    <a href="XiaomiRedmiNote5.php">Xiaomi Redmi Note 5</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/asusroggr8.jpeg" alt="Asus ROG GR8"></a>
                    <a href="Asusrog.php">Asus ROG GR8</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/rdr2.jpg" alt="Red Dead Redemption 2"></a>
                    <a href="RDR2.php">Red Dead Redemption 2</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/razerkrakenpro.jpg" alt="Razer Kraken Pro"></a>
                    <a href="Razer.php">Razer Kraken Pro</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/sgnote9.jpg" alt="Samsung Galaxy Note 9"></a>
                    <a href="SGN9.php">Samsung Galaxy Note 9</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/hpbs017.jpg" alt="HP BS017"></a>
                    <a href="hp.php">HP BS017</a>
                </div>
                <div class="product-item">
                    <img src="irudiak/re2.jpg" alt="Resident Evil 2"></a>
                    <a href="re2.php">Resident Evil 2</a>
                </div>
            </section>
            <hr>
            <section>
                <div class="products-list">
                    <div class="ventajas">
                        <a href="Gutxiagoordaindu.php" target="_self"><img src="irudiak/Argazkia1.jpg" alt="Gutxiago ordaindu"></a>
                    </div>
                    <div class="ventajas">
                        <a href="Bidalketadoan.php" target="_self"><img src="irudiak/Argazkia2.jpg" alt="Bidalketa doan"></a>
                    </div>
                    <div class="ventajas">
                        <a href="2urte.php" target="_self"><img src="irudiak/Argazkia3.jpg" alt="2 urteko garantia"></a>
                    </div>
                    <div class="ventajas">
                        <a href="Ordainketasegurua.php" target="_self"><img src="irudiak/Argazkia4.jpg" alt="Ordainketa segurua"></a>
                    </div>
                </div>
            </section>
            <hr>
        </main>
        <footer class="footer-container">
            <div class="ultimos-botones">
                <nav>
                    <ul>
                        <li><a href="Erosketabaldintzak.php" target="_self">Erosketa baldintzak</a></li>
                        <li><a href="https://twitter.com/gartxon?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @gartxon</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                    </ul>
                </nav> 
            </div>
            <div class="footer-container">
                <div class="img">
                    <img src="irudiak/footer1.png" style="width:100%" alt="Ordainketa segurua">
                </div>
                <div class="copyright">
                    &#169 Todos los Derechos Reservados |<a href="index.php">Gartxon</a>
                </div>
            </div>
        </footer>
    </body>
</html>
