<?php
require_once("./utils/data.php");
require_once("./components/styleSetup.php");

$topic = $_GET["topic"] ?? "";
$nombre = $_GET["nombre"] ?? "";


if ($topic == "alta gama") {
    $marcas = [$bmw, $mercedes, $audi, $alfaromeo, $jeep];
} else if ($topic == "media gama") {
    $marcas = [$volkswagen, $peugeot, $honda];
} else {
    $marcas = [$bmw, $mercedes, $audi, $volkswagen, $peugeot, $honda, $alfaromeo, $jeep];
}

if ($nombre !== "") {
    $marcas = array_filter($marcas, function ($m) use ($nombre) {
        return stripos($m->name, $nombre) !== false;
    });
}

$tituloppal = "Consecionaria R|R";
$descriptitulo = "Donde compran los fanaticos por los autos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONSECIONARIA_22</title>
</head>
<header>
	<nav>
		<a href="./index.php">HOME</a>
	</nav>
</header>

<?php 
require("./components/body.php");
?>

<footer>
	<h3>© Buenos Aires, Argentina ©</h3>
</footer>
</html>
