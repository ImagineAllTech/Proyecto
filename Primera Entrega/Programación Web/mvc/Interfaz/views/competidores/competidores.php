<?php
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="/Interfaz/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Interfaz/assets/css/styles.css">
		<script src="/Interfaz/assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="/index.php?c=competidores&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br>
			<br>
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>CI</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Fecha de Nacimiento</th>
							<th>Altura</th>
							<th>Peso</th>
							<th>Sexo</td>
							<th>Escuela</th>
							<th>Dojo</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["Competidores"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["CI"]."</td>";
							echo "<td>".$dato["Nombre"]."</td>";
							echo "<td>".$dato["Apellido"]."</td>";
							echo "<td>".$dato["Fnac"]."</td>";
							echo "<td>".$dato["Altura"]."</td>";
							echo "<td>".$dato["Peso"]."</td>";
							echo "<td>".$dato["Sexo"]."</td>";
							echo "<td>".$dato["Escuela"]."</td>";
							echo "<td>".$dato["Dojo"]."</td>";
							echo "<td><a href='/index.php?c=competidores&a=modificar&ID=".$dato["ID"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='/index.php?c=competidores&a=eliminar&ID=".$dato["ID"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>