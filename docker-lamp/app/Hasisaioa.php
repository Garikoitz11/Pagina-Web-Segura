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
        <link rel="stylesheet" type="text/css" href="CSS/hasiSaio.css">
        <link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header class="header">
            <div class="container logo-nav-container">
                <a href="index.php" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
                <nav class="navigation">
                    <ul>
                        <li><a href="erregistratu.php" target="_self">ERREGISTRATU</a></li> 
                    </ul>
                </nav>                    
            </div>
        </header>

    <nav>
    <form class="formulario" name="addForm" method="post" action="saioaHasi.php">
        <br>
        <legend class="registrar" style="font-size: 24px;"><strong>Hasi saioa:</strong></legend>
        <br>
        <div class="formulario__grupo" id="grupo__usuario">
            <label for="usuario" class="formulario__label1">Erabiltzaile-izena</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="erabiltzaile" id="usuario" pattern="[a-zA-Z0-9_-]{4,16}" placeholder="markel45" required>
            </div>
        </div>
        <br>
        <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label2">Pasahitza</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="pasahitza" id="password" value="" required>
                <span id = "message1" style="color:red"> </span>
            </div>
        </div>
        <br>

        <!-- Boton Hasi saioa-->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" value="Registrarse">Hasi saioa</button>
			</div>
    </form>
    </nav>
    <br>
    <div class="hemen">
		Oraindik ez zara erregistratu?<a href="erregistratu.php"> Erregistratu</a>
	</div>
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
                &#169 Todos los Derechos Reservados |<a href="#">Gartxon</a>
            </div>
        </div>
    </footer>
    </body>
</html>