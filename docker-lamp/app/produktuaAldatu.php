<?php
    session_start();
    $GureKodea = $_SESSION['kode'];

    $conexion = mysqli_connect("db", "admin", "test", "database");
    $erabiltzaile = "SELECT * FROM Produktuak WHERE Kodea = '$GureKodea'"; 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
		<title>Gartxon S.L.</title>
		<link rel="stylesheet" href="CSS/estilo.css">
		<script src="js/sartuProduktu.js"></script>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"> </script>
		<link rel="shortcut icon" href="irudiak/Favicon.ico" type="image/x-icon">
	</head>
    <body>
		<header class="header">
            <div class="container logo-nav-container">
                <a href="index.html" target="_self" target="_blank"><img class="logo-principal" src="irudiak/gartxon1.jpg" alt="Gartxon S.L."></a>                   
            </div>
        </header>
		<main>
        <?php $emaitza = mysqli_query($conexion, $erabiltzaile);
                while($row=mysqli_fetch_assoc($emaitza)){?>

        <div class="alerta" id="alerta"></div>
        <br>

        <form name = "addForm" class="formulario" id="formulario" action="produktuaEditatu.php" method="post">
			<legend class= "Txertatu" style="font-size: 24px;"><strong>Aldatu informazioa</strong></legend>
			<br>
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Kodea</label>
				<div class="formulario__grupo-input">
					<div class="formulario__input" value="id" id="id" name="id"><?php echo $row["Kodea"];?></div>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>
            
            <!-- Grupo: izena -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Izena</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="izena" id="nombre" value="<?php echo $row["Izena"];?>">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>

			<!-- Grupo: mota-->
			<div class="formulario__grupo" id="grupo__mota">
				<label for="mota" class="formulario__label">Mota</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="mota" id="mota" value="<?php echo $row["Mota"];?>">
				</div>
			</div>

			<!-- Grupo: deskribapena -->
			<div class="formulario__grupo" id="grupo__deskribapena">
				<label for="deskribapena" class="formulario__label">Deskribapena</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="deskribapena" id="deskribapena" value="<?php echo $row["Deskribapena"];?>">
				</div>
			</div>

			<!-- Grupo: prezio-->
			<div class="formulario__grupo" id="grupo__prezio">
				<label for="prezio" class="formulario__label">Prezio</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="prezio" id="prezio" value="<?php echo $row["Prezioa"];?>">
				</div>
			</div>
				
			<!-- Boton Enviar-->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="button" onclick= "validarTxertatu();" class="formulario__btn" value="sartuProduktua">Txertatu</button>
			</div>   
		</form>
        <?php }?>	
		
	</main>
		
    </body>
</html>