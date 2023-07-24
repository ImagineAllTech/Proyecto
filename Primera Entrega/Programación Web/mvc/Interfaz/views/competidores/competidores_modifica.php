<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="/Interfaz/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Interfaz/assets/css/modificar.css">
		<script src="/Interfaz/assets/js/bootstrap.min.js" ></script>

	</head>
	
	<body>
		<div class="cont">
			<form id="nuevo" name="nuevo" method="POST" action="/index.php?c=competidores&a=actualizar" autocomplete="off">
			
				<h2 class="form__title">Modificar Usuario</h2>	
				<input type="hidden" id="ID" name="ID" value="<?php echo $data["ID"]; ?>" />

				<div class="form__container">

					<div class="form__group">
						<label for="CI" class="form__label">Cedula</label>
						<input type="text" class="form__input" id="CI" name="CI" value="<?php echo $data["Competidores"]["CI"]?>">
					</div>
				
					<div class="form__group">
						<label for="Nombre" class="form__label">Nombre</label>
						<input type="text" class="form__input" id="Nombre" name="Nombre" value="<?php echo $data["Competidores"]["Nombre"]?>">
					</div>
				
					<div class="form__group">
						<label	label for="Apellido" class="form__label">Apellido</label>
						<input type="text" class="form__input" id="Apellido" name="Apellido" value="<?php echo $data["Competidores"]["Apellido"]?>">
					</div>
				
					<div class="form__group">
						<label for="Fnac" class="form__label">Fecha de Nacimiento</label>
						<input type="date" class="form__date" id="Fnac" name="Fnac" value="<?php echo $data["Competidores"]["Fnac"]?>">
					</div>
				
					<div class="form__group">
						<label for="Altura" class="form__label">Altura</label>
						<input type="number" class="form__input" id="Altura" name="Altura" placeholder="Ej: 1.79" value="<?php echo $data["Competidores"]["Altura"]?>">
					</div>

					<div class="form__group">
						<label for="Peso" class="form__label">Peso</label>
						<input type="number" class="form__input" id="Peso" name="Peso" placeholder="Ej: 73.1" value="<?php echo $data["Competidores"]["Peso"]?>">
					</div>

					<div class="form__group">
						<label for="Sexo" class="form__label">Sexo</label>
						<select class="form__select" name="Sexo" id="Sexo" value="<?php echo $data["Competidores"]["Sexo"]?>">
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
							<option value="otro">Otro</option>
						</select>
					</div>

					<div class="form__group">
						<label for="Escuela" class="form__label">Escuela</label>
						<input type="text" class="form__input" id="Escuela" name="Escuela" value="<?php echo $data["Competidores"]["Escuela"]?>">
					</div>

					<div class="form__group">
						<label for="Dojo" class="form__label">Dojo</label>
						<input type="text" class="form__input" id="Dojo" name="Dojo" value="<?php echo $data["Competidores"]["Dojo"]?>">
					</div>
				
					<button id="guardar" name="guardar" type="submit" class="form__guardar btn btn-primary">Guardar</button>
				</div>
			</form>
				
		</body>
	</html>		