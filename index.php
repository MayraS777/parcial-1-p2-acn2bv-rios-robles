<?php
function getImage($name): string {
$images = array ( 
"https://w7.pngwing.com/pngs/538/981/png-transparent-bmw-logo-bmw-car-logo-bmw-logo-trademark-logo-graphics.png",
"https://w7.pngwing.com/pngs/129/888/png-transparent-mercedes-benz-sprinter-car-mercedes-benz-c-class-luxury-vehicle-benz-logo-angle-trademark-triangle.png",
"https://w7.pngwing.com/pngs/905/811/png-transparent-audi-q5-car-logo-audi-a3-audi-brand-text-vehicle-map-thumbnail.png",
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMsxaDxFlD8rE_ah9GXtvWxxvK8sAX6WRsbQ&s",
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO9KO5EhBdNIBdA9xgAQ971I0KTwc6dh1IoQ&s",
"https://cdn.imgbin.com/24/16/1/imgbin-honda-logo-car-honda-city-honda-accord-honda-silver-honda-emblem-wAR2UeNMsA9rJw8BG1FcD6Vpj.jpg",
"https://w7.pngwing.com/pngs/579/799/png-transparent-alfa-romeo-romeo-car-alfa-romeo-giulia-alfa-romeo-spider-alfa-romeo-emblem-trademark-logo.png",
"https://i.pinimg.com/736x/11/ee/ec/11eeec868f528be972314d1f07ac212f.jpg",
);
if($name == "bmw") return $images[0]; 
if($name == "mercedes") return $images[1];
if($name == "audi") return $images[2];
if($name == "volkswagen") return $images[3];
if($name == "peugeot") return $images[4];
if($name == "honda") return $images[5];
if($name == "alfaromeo") return $images[6];
if($name == "jeep") return $images[7];
return "https://www.valuehost.com.br/blog/wp-content/uploads/2022/01/post_thumbnail-77d8f2a95f2f41b5863f3fba5a261d7e.jpeg.webp";
}

$cssEstilos = "estilos";
$tituloppal =  "Consecionaria 22";
$descriptitulo = "Donde compran los locos por los autos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<title>CONSECIONARIA_22</title>
</head>
<body>
<h1 class="tituloppal"> <?= $tituloppal; ?> </h1>
<h2> <?= $descriptitulo;?> </h2>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="<?= getImage("bmw"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BMW</h5>
        <p class="card-text">Examina nuestros modelos más recientes para encontrar la tecnología más inteligente, funciones innovadoras y los tipos de motores que mejor se adaptan a ti. Compara, configura y encuentra tu nuevo BMW perfecto.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
	</div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= getImage("mercedes"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">MERCEDES BENZ</h5>
        <p class="card-text">Descubrí nuestros modelos más recientes. La combinación perfecta de lujo, deportividad y potencia.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= getImage("audi"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">AUDI</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= getImage("volkswagen"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">VOLKSWAGEN</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="<?= getImage("peugeot"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PEUGEOT</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
	</div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= getImage("honda"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HONDA</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= getImage("alfaromeo"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ALFAROMEO</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= getImage("jeep"); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JEEP</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<a href="#" class="btn btn-primary">Ver Modelos</a>
      </div>
    </div>
  </div>
</div>
	
</body>
</html>