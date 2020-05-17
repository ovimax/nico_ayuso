<?php
error_reporting(E_ALL|E_STRICT); //Activar todos los error
$uri = $_SERVER['REQUEST_URI'];
$main_name = "Nicol&aacute;s Ayuso Bernal";

if($uri == "/") {
	$uri = "/home";
}

$uri = str_replace("/","",$uri);

// Si no existe la vista, mostrasmos un 404
if(!file_exists("vistas/".$uri.".php")){
	$uri = "404";
}

// Definir las variables de conexion
$HOST = 'localhost';
$USER = 'admin';
$PASS = 'P@ssw0rd';
$DB   = 'nicolasayusobernal';

// Realizar la conexion a la base de datos
$con = new mysqli($HOST,$USER, $PASS, $DB);

// Verificamos si la conexion ha dado un error y lo mostramos
if ($con->connect_error)
{
	die('Conection failed: '. $con->connect_error);
}

//var_dump($uri);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title><?= $main_name ?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="onsistems">
	<meta name="description" content="P&aacute;gina web de mi proyecto de fin de grado.">
	<meta name="keywords" content="HTML, CSS, JavaScript, PHP">
	<link rel="shortcut icon" type="image/x-icon" sizes="32x32" href="/favicon.ico">

    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>
<body>

	<div class="header">
		<div class="title"><a href="/"><?= $main_name ?></a></div>
		<nav class="nav justify-content-end nav-pills movil-hide">
			<a class="nav-link" href="/" id="nav-home">Home</a>
			<a class="nav-link" href="/proyectos" id="nav-proyectos">Proyectos</a>
			<a class="nav-link" href="/sensor-temperatura" id="nav-sensor-temperatura">Sensor de Temperatura</a>
			<a class="nav-link" href="/curriculum" id="nav-curriculum">Curriculum</a>
			<a class="nav-link" href="/contacto" id="nav-contacto">Contacto</a>
		</nav>
	</div>
	<div class="dropdown movil-show">
	  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    	<svg class="bi bi-list" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 013 11h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 7h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 3h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/></svg>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="/" id="nav-home">Home</a>
			<a class="dropdown-item" href="/proyectos" id="nav-proyectos">Proyectos</a>
			<a class="dropdown-item" href="/sensor-temperatura" id="nav-sensor-temperatura">Sensor de Temperatura</a>
			<a class="dropdown-item" href="/curriculum" id="nav-curriculum">Curriculum</a>
			<a class="dropdown-item" href="/contacto" id="nav-contacto">Contacto</a>
		</div>
	</div>
	

	<div class="container contenido">
		<div class="content row">
			<main class="col-sm-10"><?php include "vistas/".$uri.".php"; $con->close();?></main>
			<aside class="col-sm-2">
				<div class="widget">
					<p>No te vaya sin firmar en el <br><a href="/contacto">Libro de Visitas</a></p>
				</div>
				<div class="widget">Como hacer un servidor web con una Rasberry Pi<br><a href="proyectos">AQUI</a></div>
				<div class="widget">
					<a href="/doc/CV_Nicolás-Ayuso-Bernal.pdf" download><svg class="bi bi-file-earmark-arrow-down" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
						<path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
						<path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 01.708 0L8 10.793l1.646-1.647a.5.5 0 01.708.708l-2 2a.5.5 0 01-.708 0l-2-2a.5.5 0 010-.708z" clip-rule="evenodd"/>
						<path fill-rule="evenodd" d="M8 6a.5.5 0 01.5.5v4a.5.5 0 01-1 0v-4A.5.5 0 018 6z" clip-rule="evenodd"/>
					</svg>CURRICULUM</a>
				</div>
				<div class="widget">
					<div class="date"><?= date("d m Y") ?></div>
					<div class="date"><?= date("H:i") ?></div>
					<div class="date">Eres el visitante numero: <?php echo rand(500,1000); ?></div>
				</div>
			</aside>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<nav class="nav flex-column">
				<a class="nav-link" href="/home">Home</a>
				<a class="nav-link" href="/proyectos">Proyectos</a>
				<a class="nav-link" href="/sensor-temperatura">Sensor de Temperatura</a>
				<a class="nav-link" href="/curriculum">Curriculum</a>
				<a class="nav-link" href="/contacto">Contacto</a>
			</nav>
		</div>
	</div>

</body>
<footer>
	<script src="/assets/plugins/jquery/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(()=>{
			var nav_link = "<?= $uri ?>";
			$(".nav-link").removeClass("active");
			$("#nav-"+nav_link).addClass("active");
		})
	</script>
</footer>
	
</html>


