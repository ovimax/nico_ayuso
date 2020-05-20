<?php
// Definimos la consulta para la base de datos
$sql = "SELECT * FROM datos"; // Seleccionamos de la base de datos el ultimo registro de la tabla datos

// Lanzamos la consulta y recogemos los datos en caso de que hubieran y la  consulta haya sido correcta
$response = $con->query($sql);
$results = array();

if ($response && isset($response->num_rows) && $response->num_rows > 0){
	while($row = $response->fetch_assoc())
	{
		array_push($results,$row);
	}
}
$last = end($results); // obtenemos el ultimo registro

// Buscamos los primeros registro min y max, de la temperatura y humedad
$min_temperatura = min(array_column($results, 'temperatura'));
$max_temperatura = max(array_column($results, 'temperatura'));

$min_humedad = min(array_column($results, 'humedad'));
$max_humedad = max(array_column($results, 'humedad'));

$minT = array_filter($results, function($value) use ($min_temperatura){
    return $value["temperatura"] == $min_temperatura;
});
$minT = array_shift($minT);

$maxT = array_filter($results, function($value) use ($max_temperatura){
    return $value["temperatura"] == $max_temperatura;
});
$maxT = array_shift($maxT);

$minH = array_filter($results, function($value) use ($min_humedad){
    return $value["humedad"] == $min_humedad;
});
$minH = array_shift($minH);

$maxH = array_filter($results, function($value) use ($max_humedad){
    return $value["humedad"] == $max_humedad;
});
$maxH = array_shift($maxH);

?>
<h2>SENSOR TEMPERATURA #<?= $last["id"] ?></h2>
<p><span>FECHA:</span> <?= $last["fecha"] ?></p>

<table class="table table-bordered">
	<tr>
		<th>TEMPERATURA</th>
		<th>HUMEDAD</th>
	</tr>
	<tr>
		<td><?= $last["temperatura"] ?> ºC</td>
		<td><?= $last["humedad"] ?> %</td>
	</tr>
</table>

<h3>Minimo temperatura #<?= $minT["id"] ?></h3>
<p><span>FECHA:</span> <?= $minT["fecha"] ?></p>

<table class="table table-bordered">
	<tr>
		<th>TEMPERATURA</th>
		<th>HUMEDAD</th>
	</tr>
	<tr>
		<td><?= $minT["temperatura"] ?> ºC</td>
		<td><?= $minT["humedad"] ?> %</td>
	</tr>
</table>


<h3>Maxima temperatura #<?= $maxT["id"] ?></h3>
<p><span>FECHA:</span> <?= $maxT["fecha"] ?></p>

<table class="table table-bordered">
	<tr>
		<th>TEMPERATURA</th>
		<th>HUMEDAD</th>
	</tr>
	<tr>
		<td><?= $maxT["temperatura"] ?> ºC</td>
		<td><?= $maxT["humedad"] ?> %</td>
	</tr>
</table>

<h3>Minimo humedad #<?= $minH["id"] ?></h3>
<p><span>FECHA:</span> <?= $minH["fecha"] ?></p>

<table class="table table-bordered">
	<tr>
		<th>TEMPERATURA</th>
		<th>HUMEDAD</th>
	</tr>
	<tr>
		<td><?= $minH["temperatura"] ?> ºC</td>
		<td><?= $minH["humedad"] ?> %</td>
	</tr>
</table>

<h3>Maxima humedad #<?= $maxH["id"] ?></h3>
<p><span>FECHA:</span> <?= $maxH["fecha"] ?></p>

<table class="table table-bordered">
	<tr>
		<th>TEMPERATURA</th>
		<th>HUMEDAD</th>
	</tr>
	<tr>
		<td><?= $maxH["temperatura"] ?> ºC</td>
		<td><?= $maxH["humedad"] ?> %</td>
	</tr>
</table>


