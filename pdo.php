<!DOCTYPE html>
<html>
<head>
	<title>resultados filtro</title>
</head>
<body>
	<table border>
	<?php 
	if(isset($_GET['anu_numero_serie'])) {
	    $anu_numero_serie = $_GET['anu_numero_serie'];
	} else {
	    $anu_numero_serie = '';
	}
	if(isset($_GET['anu_marca'])) {
	    $anu_marca = $_GET['anu_marca'];
	} else {
	    $anu_marca = '';
	}
	if(isset($_GET['anu_modelo'])) {
	    $anu_modelo = $_GET['anu_modelo'];
	} else {
	    $anu_modelo = '';
	}
	if(isset($_GET['anu_color'])) {
	    $anu_color = $_GET['anu_color'];
	} else {
	    $anu_color = '';
	}

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=bd_kingbarcelona','root','');
		echo "conexion realizada <br>";
		$select = 'SELECT * FROM anunci WHERE ';
		$variables = "";
		$parametres = array();
		if ($anu_numero_serie != "") {
			$variables = 'anu_numero_serie = ? ';
			$parametres[]=$anu_numero_serie;
		}
		if ($anu_marca != "") {
			if ($variables != "") {
				$variables .= 'OR ';
			}
			$variables .= 'anu_marca = ? ';
			$parametres[]=$anu_marca;
		}
		if ($anu_modelo != "") {
			if ($variables != "") {
				$variables .= 'OR ';
			}
			$variables .= 'anu_modelo = ? ';
			$parametres[]=$anu_modelo;
		}
		if ($anu_color != "") {
			if ($variables != "") {
				$variables .= 'OR '; //$variables .= '||';
			}
			$variables .= 'anu_color = ? ';
			$parametres[]=$anu_color;
		}
		$select .= $variables;
		echo $select . "<br/>";
		//echo $parametres[0] . "---" . $parametres[1] . "<br/>";

		//*-------------------metodo 1----------------------*//


		// $statement = $conexion->prepare($select);
		// $statement->bind_param('s',$anu_numero_serie);
		// $statement->execute();



		//*-------------------metodo 2----------------------*//

		
			$statement = $conexion->prepare($select);
			
			$statement->execute($parametres);
			

			$resultados = $statement->fetchAll();
			foreach ($resultados as $bici) {
				$foto='img/'. $bici['anu_foto'];
				if (file_exists ($foto)){
						echo "<tr><td><img src='" . $foto . "' width='30'/></td>";
					} else {
						echo "<tr><td><img src='img/bici0.jpg' width='30'/></td>";
					}
				echo "<td>" . $bici['anu_titol'] . "</td><td>" . $bici['anu_data_anunci'] . "</td><td>" . "+info</td>";
			}
			
		
		
		if ($anu_marca != "") {
			$statement = $conexion->prepare('SELECT * FROM anunci WHERE anu_marca = ?');
			$statement->execute(array(
			$anu_marca
			));

			$resultados = $statement->fetch();
			echo "<pre>";
			print_r($resultados['anu_marca']);
			echo "<pre>";
		}

	}catch(PDOExeption $e){
		echo "Error: " . $e->getMessage();

	}



	?>
	</tr></table>
</body>
</html>
