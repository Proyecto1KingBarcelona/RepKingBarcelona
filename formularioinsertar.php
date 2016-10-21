
<?php

if (!$_GET) {
	?>

	<form method="GET" action="formularioinsertar.php" enctype="multipart/form-data">
		titulo:<input type="text" name="anu_titol">
		<br>
		<br>
		fecha robo:<input type="date" name="anu_data_robatori">
		<br>
		<br>
		ubicacion:<select name="anu_ubicacio_robatori">
										<option value="0">Todos</option>
										<option value="barcelona">Barcelona</option>
										<option value="hospitalet de llobregat">Hospitalet de Llobregat</option>
										<option value="badalona">Badalona</option>
										<option value="tarrasa">Tarrasa</option>
										<option value="sabadell">Sabadell</option>
										<option value="santa coloma de gramanet">Santa Coloma de Gramanet</option>
										<option value="mataro">Mataró</option>
										<option value="sant cugat del valles">Sant Cugat del Vallés</option>
										<option value="cornella de llobregat">Cornellá de Llobregat</option>
										<option value="san baudilio de llobregat">San Baudilio de Llobregat</option>
										<option value="manresa">Manresa</option>
										<option value="rubi">Rubí</option>
										<option value="villanueva y geltru">Villanueva y Geltru</option>
										<option value="viladecans">Viladecans</option>
										<option value="castelldefels">Castelldefels</option>
										<option value="el prat de llobregat">El Prat de Llobregat</option>
										<option value="granollers">Granollers</option>
										<option value="sardanyola del valles">Sardañola del Vallés</option>
										<option value="mollet del valles">Mollet del Vallès</option>
										<option value="gava">Gavá</option>
									</select>
		<br>
		<br>
		descripcion robo:<textarea cols="40" rows="10" name="anu_descripcio_robatori"></textarea> 
		<br>
		<br>
		marca:<input type="text" name="anu_marca">
		<br>
		<br>
		model:<input type="text" name="anu_model">
		<br>
		<br>
		color:<select name="anu_color">
									<option value="0" selected>Todos</option>
									<option value="negro">Negro</option>
									<option value="blanco">Blanco</option>
									<option value="rojo">Rojo</option>
									<option value="naranja">Naranja</option>
									<option value="amarillo">Amarillo</option>
									<option value="azul">Azul</option>
									<option value="plata">Plateado</option>
									<option value="verde">Verde</option>
								</select>
		<br>
		<br>
		antiguedad:<input type="text" name="anu_antiguitat">
		<br>
		<br>
		descripcion:<textarea cols="40" rows="10" name="anu_descripcio"></textarea> 
		<br>
		<br>
		numero serie:<input type="text" name="anu_numero_serie">
		<br>
		<br>
		foto:<input type="file" name="anu_foto">
		<br>
		<br>
		recompensa: <input name="anu_compensacio" type="number" step="any">
		<input type="submit" value="enviar">

	</form>
 

	<?php
}else{	
	$fecha=date("Y-m-d");
	echo $fecha;

	$conexion = mysqli_connect('localhost', 'root', '', 'bd_kingbarcelona');
	$sql= "INSERT INTO anunci (anu_titol, anu_data_anunci, anu_data_robatori, anu_ubicacio_robatori, anu_descripcio_robatori, anu_marca, anu_model, anu_color, anu_antiguitat, anu_descripcio, anu_numero_serie, anu_foto, anu_compensacio) values ('" . $_GET['anu_titol'] . "', '  $fecha  ', '" . $_GET['anu_data_robatori'] . "', '" . $_GET['anu_ubicacio_robatori'] . "', '" . $_GET['anu_descripcio_robatori'] . "', '" . $_GET['anu_marca'] . "', '" . $_GET['anu_model'] . "', '" . $_GET['anu_color'] . "', '" . $_GET['anu_antiguitat'] . "', '" . $_GET['anu_descripcio'] . "', '" . $_GET['anu_numero_serie'] . "', '" . $_GET['anu_foto'] . "', '" . $_GET['anu_compensacio'] . "')"; 
	


if (mysqli_query($conexion, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
 

}


?>
