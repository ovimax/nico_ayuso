<?php
if( (isset($_POST["name"]) && isset($_POST["text"]))){
	// Definimos la consulta para la base de datos, para guardar el nevo registro
	$sql = "INSERT INTO libro_visitas (name, text) VALUES ('".$_POST["name"]."', '".$_POST["text"]."');";
	$con->query($sql);
	$con->close();
	header('Location: contacto'); //recargamos la pagina para reiniciar las variable POST de PHP
} else {
	// Obtenemos los registro en el orden de fecha destendiente
	$sql = "SELECT * FROM libro_visitas ORDER BY date DESC";
}


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
<h2>CONTACTO</h2>
<p><svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
</svg> <a href="mailto:nicoayusobernal@gmail.com">nicoayusobernal@gmail.com</a></p>
<p><svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 100-6 3 3 0 000 6zm-5.784 6A2.238 2.238 0 015 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 005 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" clip-rule="evenodd"/>
</svg> <a href="https://www.facebook.com/nicolasayusobernal" target="_blank">Facebook | Nicolás Ayuso</a></p>
<p><svg class="bi bi-person-bounding-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 00-.5.5v3a.5.5 0 01-1 0v-3A1.5 1.5 0 011.5 0h3a.5.5 0 010 1h-3zM11 .5a.5.5 0 01.5-.5h3A1.5 1.5 0 0116 1.5v3a.5.5 0 01-1 0v-3a.5.5 0 00-.5-.5h-3a.5.5 0 01-.5-.5zM.5 11a.5.5 0 01.5.5v3a.5.5 0 00.5.5h3a.5.5 0 010 1h-3A1.5 1.5 0 010 14.5v-3a.5.5 0 01.5-.5zm15 0a.5.5 0 01.5.5v3a1.5 1.5 0 01-1.5 1.5h-3a.5.5 0 010-1h3a.5.5 0 00.5-.5v-3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg> <a href="https://www.instagram.com/nicoayuso/" target="_blank">Instagram | @nicoayuso</a></p>
<p><svg class="bi bi-hash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8.39 12.648a1.32 1.32 0 00-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 00.016-.164.51.51 0 00-.516-.516.54.54 0 00-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 00-.523-.516.539.539 0 00-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"/>
</svg><a href="https://twitter.com/nayuberjg" target="_blank"> Twitter | @nayuberjg </a></p>
<p><svg class="bi bi-briefcase-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5V6.85L8.129 8.947a.5.5 0 01-.258 0L0 6.85v5.65z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v1.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z" clip-rule="evenodd"/>
</svg><a href="https://www.linkedin.com/in/nicol%C3%A1s-ayuso-bernal-243b901a8/" target="_blank"> Linkedin | Nicolás Ayuso Bernal</a></p>

<div id="registro"><h2>Registra tu visita</h2>
	<form action="contacto" method="POST">
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Nombre</label>
	    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tu nombre..." name="name" required="required">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Texto</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" maxlength="200" name="text" required="required" placeholder="Max 150 caracteres"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>
<br>
<h3><b>LISTADO DE FIRMAS</b></h3>
<?php 
	// recoremos todas los resultado de la base de datos, y las mostramos en la misma estructura HTML
	foreach($results as $key=>$value): 
?>

	<div class="firma">
		<p><b><?= ($value["name"]==" ")?"Anonimo":$value["name"] ?></b> | <span class="fecha"><i><?= date_format(date_create($value["date"]),"d-m-Y") ?></span></i> </p>
		<p><?= $value["text"] ?></p>
	</div>

<?php endforeach; ?>
