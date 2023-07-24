<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="/Interfaz/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Interfaz/assets/css/nuevo.css">
		<script src="/Interfaz/assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="cont">
			
			<form id="nuevo" name="nuevo" method="POST" action="/index.php?c=competidores&a=guarda" autocomplete="off">
			<h2 class="form__title">AGREGAR USUARIO</h2>		
				
				<div class="form__container">

					<div class="form__group">
						<label for="CI" class="form__label">Cedula</label>
						<input type="text" class="form__input" id="CI" name="CI" placeholder="Ej: 42315955" required minlength="8" maxlength="8" pattern="\d{8}">
					</div>
				
					<div class="form__group">
						<label for="Nombre" class="form__label">Nombre</label>
						<input type="text" class="form__input" id="Nombre" name="Nombre" placeholder="Ej: Lucas" required maxlength="20" pattern="[a-z]{2,20}">
					</div>
				
					<div class="form__group">
						<label for="Apellido" class="form__label">Apellido</label>
						<input type="text" class="form__input" id="Apellido" name="Apellido" placeholder="Ej: Anduz" required maxlength="20" pattern="[a-z]{2,20}">
					</div>
				
					<div class="form__group">
						<label for="Fnac" class="form__label">Fecha de Nacimiento</label>
						<input type="date" class="form__date" id="Fnac" name="Fnac" required>
					</div>
				
					<div class="form__group">
						<label for="Altura" class="form__label">Altura</label>
						<input type="number" class="form__input" id="Altura" name="Altura" placeholder="Ej: 1.80" required min="1.00" max="3.00" step="0.01"> <!-- pattern="^(3,2)(\.\d{2})?$" -->
					</div>

					<div class="form__group">
						<label for="Peso" class="form__label">Peso</label>
						<input type="number" class="form__input" id="Peso" name="Peso" placeholder="Ej: 72.2" required min="10.0" max="300.0" step="0.1" pattern="^(200|\d{3,1})(\.\d)?$">
					</div>

					<div class="form__group">
						<label for="Sexo" class="form__label">Sexo</label>
						<select class="form__select" name="Sexo" id="Sexo">
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
							<option value="Otro">Otro</option>
						</select>
						
					</div>

					<div class="form__group">
					<label for="Escuela" class="form__label">Escuela</label>
						<input type="text" class="form__input" id="Escuela" name="Escuela" placeholder="EJ: Karate Urupan" required maxlenght="30" >
						
					</div>

					<div class="form__group">
					<label for="Dojo" class="form__label">Dojo</label>
						<input type="text" class="form__input" id="Dojo" name="Dojo" placeholder="EJ: Hyu Kara Han" required maxlenght="30">
						
					</div>
				
					<button id="guardar" name="guardar" type="submit" class="form__guardar btn btn-primary">Guardar</button>
				</div>
			</form>

			
		</div>
	</body>
</html>