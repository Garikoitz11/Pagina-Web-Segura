<?php
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Erregistratu</title>
	<link rel="stylesheet" href="CSS/estilo.css">
	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">
</head>
<body>
	<header class="header">
		<div class="container logo-nav-container">
			<a href="index.html" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>
			<nav class="navigation">
				<ul>
					<li><a href="Hasisaioa.html" target="_self">HASI SAIOA</a></li> 
				</ul>
			</nav>                    
		</div>
	</header>
	
	<main>
		
		<div class="alerta" id="alerta"></div>
		<br>

			<form name = "addForm" action="datuakErregistratu.php" class="formulario" id="formulario" method="post">

				<legend class= "registrar" style="font-size: 24px;"><strong>Erregistratu:</strong></legend>
				<br>
			<!-- Grupo: erabiltzaile -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Erabiltzaile</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="erabiltzaile" id="usuario" placeholder="markel45">
				</div>
			</div>

			<!-- Grupo: izena -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Izena</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="izena" id="nombre" placeholder="Markel">
				</div>
			</div>

			<!-- Grupo: abizena-->
			<div class="formulario__grupo" id="grupo__abizena">
				<label for="abizena" class="formulario__label">Abizena</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="abizena" id="abizena" placeholder="Martinez">
					</div>
			</div>

			<!-- Grupo: posta-kodea -->
			<div class="formulario__grupo" id="grupo__codigoPostal">
				<label for="codigoPostal" class="formulario__label">Posta-kodea</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="posta-kodea" id="codigoPostal" placeholder="48903">
				</div>
				<p class="formulario__input-error">El codigoPostal tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>


			<!-- Grupo: NAN-->
			<div class="formulario__grupo" id="grupo__NAN">
				<label for="NAN" class="formulario__label">NAN</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="NAN" id="NAN" onclick="averigua()" placeholder="25791365D">
					<i class="formulario__validacion-estado fas fa-times-circle"></i> 
				</div>
				<p class="formulario__input-error">El DNI tiene que tener 8 numeros y una</p>
			</div>

			
			<!-- Grupo: JaiotzaData-->
        	<div class="formulario__grupo" id="grupo__JaiotzaData">
           		 <label for="JaiotzaData" class="formulario__label">Jaiotza Data</label>
           		 <div class="formulario__grupo-input">
               		 <input type="date" class="formulario__input" name="JaiotzaData" id="JaiotzaData" placeholder="Sartu zure Jaiotza Data">
               		 <i class="formulario__validacion-estado fas fa-times-circle"></i> 
           		 </div>
        	</div>

			<!-- Grupo: pasahitza -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Pasahitza</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="pasahitza" id="password" value="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					<span id = "message1" style="color:red"> </span>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: pasahitza 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Pasahitza errepikatu</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="pasahitza2" id="password2" value="">
					<span id = "message2" style="color:red"> </span>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: postaElektronikoa -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Posta Elektronikoa</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="postaElektronikoa" id="correo" placeholder="markel@gmail.com">
				</div>
			</div>

			<!-- Grupo: mugikorra -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Mugikorra</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="mugikorra" id="telefono" placeholder="612094376">
				</div>
			</div>

			<!-- Grupo: baldintzak -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="baldintzak" id="terminos">
					<a href="Erosketabaldintzak.html">Baldintzak</a> onartu
				</label>
			</div>
			
			
			<!-- Boton Enviar-->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="button" onclick= "validarFormulario();" class="formulario__btn" value="Registrarse">Erregistratu</button>
			</div>   

		</form>
		</fieldset>
	</main>
	<div class="hemen">
		Kontu bat eginda duzu? Hasi saioa <a href="Hasisaioa.html">hemen</a>
	</div>
	 
	
	<footer class="footer-container">
		<div class="ultimos-botones">
			<nav>
				<ul>
					<li><a href="Erosketabaldintzak.html" target="_self">Erosketa baldintzak</a></li>
					<li><a href="https://twitter.com/gartxon?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @gartxon</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
				</ul>
			</nav> 
		</div>
		<div class="footer-container">
			<div class="img">
				<img src="irudiak/footer1.png" style="width:100%" alt="Ordainketa segurua">
			</div>
			<div class="copyright">
				&#169 Todos los Derechos Reservados |<a href="index.html">Gartxon</a>
			</div>
		</div>
	</footer>
	
</body>
</html>