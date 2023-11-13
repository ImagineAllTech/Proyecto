<?php
	
	class Categorias_model {
		
		private $db;
		private $Categoria;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->Categoria = array();
		}
		
		public function get_categoria($ID = null)
{
    $sql = "SELECT * FROM categoria";

    // Si se proporciona un ID, ajusta la consulta para obtener un competidor específico
    if ($ID !== null) {
        $sql .= " WHERE IDT='$ID' LIMIT 1";
    }

    $resultado = $this->db->query($sql);

    if ($ID !== null) {
        // Si se proporcionó un ID, devolver el resultado directament
        return $resultado->fetch_assoc();
    } else {
        // Si no se proporcionó un ID, obtener todos los competidores
        $categorias = array();
        while ($row = $resultado->fetch_assoc()) {
            $categorias[] = $row;
        }
        return $categorias;
    }
}


		public function obtenerCategoriaPorTorneoID($ID) {

			$categorias = array();

			$consulta = $this->db->query("SELECT ID, nombreCat, cantCompetidores FROM categoria WHERE IDT = $ID");

			// Manejar errores si es necesario

			while ($fila = $consulta->fetch_assoc()) {
				$categorias[] = $fila;
			}

			return $categorias;

		}

		public function obtenerGrupoPorTorneoID($ID) {

			$result = $this->db->query("SELECT COUNT(IDG) as count FROM grupo WHERE IDCat = '$ID'");
			if ($result) {
				$row = $result->fetch_assoc();
				$cantGrupo = $row['count'];
			}

			// echo "'$cantGrupo'";

			if($cantGrupo === '1'){
				$grupos = array();
				$consulta = $this->db->query("SELECT IDG, CI FROM forma WHERE IDCat = $ID");
				while ($fila = $consulta->fetch_assoc()) {
					$grupos[] = $fila;
				}

        return array('grupos1' => $grupos, 'grupos2' => array());

			} else if($cantGrupo === '2'){

				// Obtener el primer IDG
				$idGrupo1Result = $this->db->query("SELECT IDG FROM forma WHERE IDCat = '$ID' LIMIT 1");
				$idGrupo1Obj = $idGrupo1Result->fetch_object();
				$idGrupo1 = $idGrupo1Obj ? $idGrupo1Obj->IDG : null;
			
				// Obtener el segundo IDG
				$idGrupo2Result = $this->db->query("SELECT IDG FROM forma WHERE IDCat = '$ID' ORDER BY IDG DESC LIMIT 1");
				$idGrupo2Obj = $idGrupo2Result->fetch_object();
				$idGrupo2 = $idGrupo2Obj ? $idGrupo2Obj->IDG : null;
			
				// Obtener datos del primer grupo
				$datosGrupo1 = $this->obtenerDatosGrupo($idGrupo1);
			
				// Obtener datos del segundo grupo
				$datosGrupo2 = $this->obtenerDatosGrupo($idGrupo2);
			
				return array('grupos1' => $datosGrupo1, 'grupos2' => $datosGrupo2);



			} else{
				echo 'Debes añadir a gente para poder tener grupos';
			}
		}

		private function obtenerDatosGrupo($IDG)
		{
			if ($IDG) {
				$consulta = $this->db->query("SELECT IDG, CI FROM forma WHERE IDG = '$IDG'");
				$datosGrupo = array();
				while ($fila = $consulta->fetch_assoc()) {
					$datosGrupo[] = $fila;
				}
				return $datosGrupo;
			} else {
				return array(); // Devolver un array vacío si no hay IDG
			}
		}

		public function generarLlaves($ID){
			$exist = $this->db->query("SELECT ID FROM llaves WHERE IDCat = '$ID'");

			// Obtengo el recuento de competidores
			$result = $this->db->query("SELECT COUNT(CI) as count FROM forma WHERE IDCat = '$ID'");
			if ($result) {
				$row = $result->fetch_assoc();
				$cantCompetidores = $row['count'];
			}


			// Aca compruebo si ya hay alguna llave generada
			if($datos = $exist->fetch_object()){
				// Si ya existe una llave
				echo '
					<div class="w-full flex">
						<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
							<h3 class="text-center w-full">Las llaves ya fueron generadas</h3>
						</div>
					</div>
				';
			} else{

				$datosLlaves = [];


				// Si no existe una llave

				if($cantCompetidores >= 2 && $cantCompetidores <= 3){
					// Obtengo la información de los competidores y asigno "AKA" a la columna "Color"
					$grupo = $this->db->query("SELECT IDG, IDT, CI, 'AKA' as Color FROM forma WHERE IDCat = '$ID'");
            
					// Puedes ahora trabajar con los resultados de la consulta
					while ($fila = $grupo->fetch_assoc()) {
						// Puedes acceder a los datos de cada competidor
						$IDG = $fila['IDG'];
						$IDT = $fila['IDT'];
						$CI = $fila['CI'];
						$Color = $fila['Color'];

						$datosLlaves[] = $fila;
		
						// Insertar en la tabla Llave
						$this->db->query("INSERT INTO llaves (IDG, IDT, CI, IDCat, Color) VALUES ('$IDG', '$IDT', '$CI', '$ID', '$Color')");
					}

					
				} else if ($cantCompetidores = 4 ){
					// Obtengo la información de los competidores
					$grupo = $this->db->query("SELECT IDG, IDT, CI FROM forma WHERE IDCat = '$ID'");

					// Variable para alternar entre los colores AKA y AO
					$colorAlternado = 'AKA';

					while ($fila = $grupo->fetch_assoc()) {
						$IDG = $fila['IDG'];
						$IDT = $fila['IDT'];
						$CI = $fila['CI'];
						$Color = $colorAlternado;
						$colorAlternado = ($colorAlternado === 'AKA') ? 'AO' : 'AKA';

						// Agregar información de Color a $datosLlaves
						$fila['Color'] = $Color;
						$datosLlaves[] = $fila;

						// Insertar en la tabla Llave
						$this->db->query("INSERT INTOllaves (IDG, IDT, CI, IDCat, Color) VALUES ('$IDG', '$IDT', '$CI', '$ID', '$Color')");
            		}


				} elseif ($cantCompetidores = 5) {
					// Obtengo la información de los competidores
					$grupo = $this->db->query("SELECT IDG, IDT, CI FROM forma WHERE IDCat = '$ID'");
		
					// Asignar color 'AKA' a los 3 primeros competidores y 'AO' a los 2 últimos
					$colores = ['AKA', 'AKA', 'AKA', 'AO', 'AO'];
					$indexColor = 0;
		
					while ($fila = $grupo->fetch_assoc()) {
						$IDG = $fila['IDG'];
						$IDT = $fila['IDT'];
						$CI = $fila['CI'];
						$datosLlaves[] = $fila;
						// Obtener el color correspondiente
						$color = $colores[$indexColor];
		
						// Insertar en la tabla Llave
						$this->db->query("INSERT INTO llaves (IDG, IDT, CI, IDCat, Color) VALUES ('$IDG', '$IDT', '$CI', '$ID', '$color')");
		
						// Incrementar el índice de color
						$indexColor++;
					}

				} if ($cantCompetidores >= 6 && $cantCompetidores <= 10) {
					
					// Obtengo la información de los competidores
					$grupo = $this->db->query("SELECT IDG, IDT, CI FROM forma WHERE IDCat = '$ID'");
		
					// Separar los competidores en dos grupos
					$competidores = [];
					while ($fila = $grupo->fetch_assoc()) {
						$competidores[] = $fila;
					}
		
					// Calcular la mitad de competidores
					$mitad = ceil(count($competidores) / 2);
		
					// Asignar colores AKA a la mitad y AO a la otra mitad
					for ($i = 0; $i < count($competidores); $i++) {
						$IDG = $competidores[$i]['IDG'];
						$IDT = $competidores[$i]['IDT'];
						$CI = $competidores[$i]['CI'];

						// Asignar color alternado
						$color = ($i < $mitad) ? 'AKA' : 'AO';

						// Agregar información de Color a $datosLlaves
						$competidores[$i]['Color'] = $color;
						$datosLlaves[] = $competidores[$i];
						
						// Insertar en la tabla Llave
						
						$this->db->query("INSERT INTO llaves (IDG, IDT, CI, IDCat, Color) VALUES ('$IDG', '$IDT', '$CI', '$ID', '$color')");
					}

				} else {
					
				}

				return $datosLlaves;

			}

		}


}
?>