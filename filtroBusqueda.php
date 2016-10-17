<!DOCTYPE html>
<html>
	<head>
		<title>Filtro</title>
	</head>
	<body>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$bd = "bd_kingbarcelona";

		$link = mysqli_connect($servername,$username,$password,$bd);
		$acentos = mysqli_query($link, "SET NAMES 'utf8'");

		if (!$link) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}//else{echo "va bien"	;}


		extract($_REQUEST);

		$sql = "SELECT * FROM anunci ";
		$anunci = mysqli_query($link, $sql);
		
			echo "Hasta aquí bien";
		if(	($anunci)>0){

			echo "Número de productos: " . mysqli_num_rows($anunci) . "<br/><br/>";
			while($producto = mysqli_fetch_array($anunci)){
				echo "Id: " . $anunci['anu_id'] . "<br/>";
				echo "Titol: " . $anunci['anu_titol'] . "<br/>";
				echo "Data anunci: " . $anunci['anu_data_anunci'] . "<br/>";
				echo "Data robatori: " . $anunci['anu_data_robatori'] . "<br/>";
				echo "Barri: " . $anunci['anu_ubicacio_robatori'] . "<br/>";
				echo "Descripció robatori: " . $anunci['anu_descripcio_robatori'] . "<br/>";
				echo "Marca: " . $anunci['anu_marca'] . "<br/>";
				echo "Model: " . $anunci['anu_model'] . "<br/>";
				echo "Antiguitat: " . $anunci['anu_antiguitat'] . "<br/>";
				echo "Descripció: " . $anunci['anu_descripcio'] . "<br/>";
				echo "Numero de serie: " . $anunci['anu_numero_serie'] . "<br/>";
				$foto='img/'.$anunci['anu_foto'];

				if (file_exists ($foto)){
					echo "<img src='" . $foto . "' width='300'/><br/><br/>";
				} else {
					echo "<img src='img/0.jpg' width='300'/><br/><br/>";
				}
			}
		} else {
			echo "No hay datos que mostrar!";
		}

		mysqli_close($conexion);


		?>
	</body>
</html>