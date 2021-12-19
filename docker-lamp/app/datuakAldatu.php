<?php
    session_start();
    $GureErabiltzaile = $_SESSION['izena'];

    $conexion = new mysqli("db", "admin", "test", "database");
	$conexion->set_charset('utf8');

    $kontsulta = "SELECT * FROM Erregistroa WHERE Erabiltzailea = '$GureErabiltzaile'"; 	
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
		<title>Gartxon S.L.</title>
		<link rel="stylesheet" href="CSS/estilo.css">
		<script src="js/formularioDatuakAldatu.js"></script>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"> </script>
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
            <div class="container logo-nav-container">
                <a href="index.php" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>                   
            </div>
        </header>
		<main>
		<?php $kontsultaBerria = $conexion->query($kontsulta);
            while($row = $kontsultaBerria->fetch_row()){
				$BankuDekode = base64_decode($row[9]);
				?>

        <div class="alerta" id="alerta"></div>
        <br>

        <form name = "addForm" class="formulario" id="formularioDatuakAldatu" action="datuBaseaAldatu.php" method="post">

				<legend class= "registrar" style="font-size: 24px;"><strong></strong></legend>
				<br>

<!-- Grupo: erabiltzaile -->
<div class="formulario__grupo" id="grupo__nombre">
	<label for="nombre" class="formulario__label">Erabiltzailea</label>
	<div class="formulario__grupo-input">
		<input class="formulario__input" name="erabiltzaile" id="usuario" value="<?php echo $row[0];?>" disabled>
	</div>
</div>
<!-- Grupo: izena -->
<div class="formulario__grupo" id="grupo__nombre">
	<label for="nombre" class="formulario__label">Izena</label>
	<div class="formulario__grupo-input">
		<input type="text" class="formulario__input" name="izena" id="nombre" value="<?php echo $row[1];?>">
	</div>
</div>

<!-- Grupo: abizena-->
<div class="formulario__grupo" id="grupo__abizena">
	<label for="abizena" class="formulario__label">Abizena</label>
	<div class="formulario__grupo-input">
		<input type="text" class="formulario__input" name="abizena" id="abizena" value="<?php echo $row[2];?>">
		</div>
</div>
			</div>

			<!-- Grupo: posta-kodea -->
			<div class="formulario__grupo" id="grupo__codigoPostal">
				<label for="codigoPostal" class="formulario__label">Posta-kodea</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="posta-kodea" id="codigoPostal" value="<?php echo $row[3];?>">
				</div>
				<p class="formulario__input-error">El codigoPostal tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>


			<!-- Grupo: NAN-->
			<div class="formulario__grupo" id="grupo__NAN">
				<label for="NAN" class="formulario__label">NAN</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="NAN" id="NAN" onclick="averigua()" value="<?php echo $row[4];?>">
					<i class="formulario__validacion-estado fas fa-times-circle"></i> 
				</div>
				<p class="formulario__input-error">El DNI tiene que tener 8 numeros y una</p>
			</div>

			
			<!-- Grupo: JaiotzaData-->
        	<div class="formulario__grupo" id="grupo__JaiotzaData">
           		 <label for="JaiotzaData" class="formulario__label">Jaiotza Data</label>
           		 <div class="formulario__grupo-input">
               		 <input type="date" class="formulario__input" name="JaiotzaData" id="JaiotzaData" value="<?php echo $row[5];?>">
               		 <i class="formulario__validacion-estado fas fa-times-circle"></i> 
           		 </div>
        	</div>

			<!-- Grupo: pasahitza -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Pasahitza</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="pasahitza" id="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					<span id = "message1" style="color:red"> </span>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: pasahitza 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Pasahitza errepikatu</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="pasahitza2" id="password2">
					<span id = "message2" style="color:red"> </span>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: postaElektronikoa -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Posta Elektronikoa</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="postaElektronikoa" id="correo" value="<?php echo $row[7];?>">
				</div>
			</div>

			<!-- Grupo: mugikorra -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Mugikorra</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="mugikorra" id="telefono" value="<?php echo $row[8];?>">
				</div>
			</div>		

			<!-- Grupo: Datu Bankarioak -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="datosBancarios" class="formulario__label">Datu Bankarioak</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="datuBankarioak" id="datosBancarios" value="<?php echo $BankuDekode;?>">
				</div>
			</div>
						
			<!-- Boton Enviar-->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="button" onclick= "validarFormulario();" class="formulario__btn" value="sartuProduktua">Txertatu</button>
			</div>   

		</form>
		<?php }?>	
		
	</main>
		
    </body>
</html>