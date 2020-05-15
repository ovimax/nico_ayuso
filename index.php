<?php
$uri = $_SERVER['REQUEST_URI'];
$main_name = "Nicol&aacute;s Ayuso Bernal";

if($uri == "/") {
	$uri = "/home";
}

$uri = str_replace("/","",$uri);

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
	<meta name="description" content="P&aacute;gina web de mi proyecto de fin de grado con la ayuda de @onsistems.">
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
	<div class="dropdown">
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
			<main class="col-sm-10"><?php include "vistas/".$uri.".php"; ?></main>
			<aside class="col-sm-2">
				<div class="widget"></div>
				<div class="widget"></div>
				<div class="widget"></div>
				<div class="widget">
					<div class="date"><?php echo date("d m Y"); ?></div>
					<div class="date"><?php echo date("H:i"); ?></div>
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
			<p>Created by <a href="https://onsistems.com/">@onsistems</a></p>
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

