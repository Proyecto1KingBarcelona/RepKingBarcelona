<!DOCTYPE html>
<html>
<head>
	<title>resultados filtro</title>
</head>
<body>
	<table border>
	<?php 
	

	try{
		$nada = 1; 
		if(isset($_GET['anu_numero_serie'])) {
		    $anu_numero_serie = $_GET['anu_numero_serie'];
		    if ($anu_numero_serie != "") {
		    	$nada = 0;
		    }
		} else {
		    $anu_numero_serie = '';

		} echo "<br>nada num serie: " . $nada;
		if(isset($_GET['anu_marca'])) {
		    $anu_marca = $_GET['anu_marca'];
		    if ($anu_marca != "") {
		    	$nada = 0;
		    }
		} else {
		    $anu_marca = '';
		}echo "<br>nada marca: " . $nada;
		if(isset($_GET['anu_modelo'])) {
		    $anu_modelo = $_GET['anu_modelo'];
		    if ($anu_modelo != "") {
		    	$nada = 0;
		    }
		} else {
		    $anu_modelo = '';
		}echo "<br>nada modelo: " . $nada;
		if(isset($_GET['anu_color'])) {
		    $anu_color = $_GET['anu_color'];
		    if ($anu_color == 0) {
		    	// $anu_color = "";
		    	// $nada2 = 1;
		    }else{$nada = 0;}
		    // $nada = 0;
		} else {
		    $anu_color = '';
		}echo "<br>nada color: " . $nada;
		if (isset($_GET['anu_ubicacio_robatori'])) {
			$anu_ubicacio_robatori = $_GET['anu_ubicacio_robatori'];
			if ($anu_ubicacio_robatori == 0) {
		    	// $anu_ubicacio_robatori = "";
		    	// $nada2 = 1;
		    }else{$nada = 0; echo "pasa por aqui";}
		} else {
			$anu_ubicacio_robatori = '';
		}echo "<br>nada ubicacio: " . $nada . "<br>";

		echo "<br> ubicacio" . $anu_ubicacio_robatori . "<br>";




		$conexion = new PDO('mysql:host=localhost;dbname=bd_kingbarcelona','root','');

		echo "conexion realizada <br> nada:" . $nada;

		if ($nada == 1) {
			$select = 'SELECT * FROM anunci';
		}else {
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
			echo "variables: " . $variables . "<br/> Color: " . $anu_color;
			if ($anu_ubicacio_robatori != "") {
				if ($variables != "") {
					$variables .= 'OR '; //$variables .= '||';
				}
				$variables .= 'anu_ubicacio_robatori = ? ';
				$parametres[]=$anu_ubicacio_robatori;
			}
			$select .= $variables;
			echo $select . "<br/> &num;";
		}
		//echo $parametres[0] . "---" . $parametres[1] . "<br/>";

		//*-------------------metodo 1----------------------*//


		// $statement = $conexion->prepare($select);
		// $statement->bind_param('s',$anu_numero_serie);
		// $statement->execute();



		//*-------------------metodo 2----------------------*//

		
			$statement = $conexion->prepare($select);
			if ($nada = 1) {
			$statement->execute();
			}else{$statement->execute($parametres);}

			$resultados = $statement->fetchAll();
			foreach ($resultados as $bici) {
				$foto='img/'. $bici['anu_foto'];
				if (file_exists ($foto)){
						echo "<tr><td><img src='" . $foto . "' width='30'/></td>";
					} else {
						echo "<tr><td><img src='img/bici0.jpg' width='30'/></td>";
					}
				echo "<td>" . $bici['anu_titol'] . "</td><td>" . date("d/m/Y", strtotime($bici['anu_data_anunci'])) . "</td><td>" . "+info</td>";
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
		$conexion = null;

	}catch(PDOExeption $e){
		echo "Error: " . $e->getMessage();

	}



	?>
	</tr></table>
</body>
</html>
