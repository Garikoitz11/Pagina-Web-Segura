<?php
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gartxon S.L.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/bakoitza.css">
        <link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">

    </head>
    <body>
        <header class="header">
            <div class="container logo-nav-container">
                <a href="index.html" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
                
                    <ul class="navigation" >
                        <li><a href="erregistratu.html" target="_self">ERREGISTRATU</a></li> 
                        <li><a href="Hasisaioa.html" target="_self">HASI SAIOA</a></li> 
                    </ul>
                                
            </div>
        </header>
        <main> 
        <div class="titulo"> RAZER KRAKEN PRO</div>
        
        <nav class="columnas">   
        <p> <div class="foto"><img src="irudiak/razerkrakenpro.jpg" width="250px" alt="Razer Kraken Pro"> </div></p>
        <p>
        <div class="cuerpo1"><strong>Erosoak:</strong>&nbsp;Bai</div>
        <div class="cuerpo"><strong>Mikrofonoa:</strong>&nbsp;Bai</div>
        <div class="cuerpo"><strong>Prezioa:</strong>&nbsp;50€</div><br>
        <input class="erosi" type="submit" value="erosi" onclick = "alert('Produktua erosi duzu.');window.location.href='index.html'"/>
        </p>
        </nav>
        </main>
        
        <footer class="footer-container">
            <div class="ultimos-botones">
                
                    <ul>
                        <li><a href="Erosketabaldintzak.html" target="_self">Erosketa baldintzak</a></li>
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






















        

