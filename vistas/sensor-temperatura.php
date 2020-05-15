<?php
// Definimos la consulta para la base de datos
$sql = "SELECT * FROM datos ORDER BY fecha DESC LIMIT 1"; // Seleccionamos de la base de datos el ultimo registro de la tabla datos

// Lanzamos la consulta y recogemos los datos en caso de que hubieran y la  consulta haya sido correcta
$response = $con->query($sql);
$results = array();

if ($response && isset($response->num_rows) && $response->num_rows > 0){
	while($row = $response->fetch_assoc())
	{
		array_push($results,$row);
	}
}
?>

<h1>SENSOR #<?= $results[0]["id"] ?></h1>
<p><span>FECHA:</span> <?= $results[0]["fecha"] ?></p>
<p><span>TEMPERATURA:</span> <?= $results[0]["temperatura"] ?> ºC</p>
<p><span>HUMEDAD:</span> <?= $results[0]["humedad"] ?> %</p>

<table class="table table-bordered">
	<tr>
		<th>TEMPERATURA</th>
		<th>HUMEDAD</th>
	</tr>
	<tr>
		<td><?= $results[0]["temperatura"] ?> ºC</td>
		<td><?= $results[0]["humedad"] ?> %</td>
	</tr>
</table>