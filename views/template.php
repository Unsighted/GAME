<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--=====================================
	Marcado de Open Graph
	======================================-->

	<meta property="og:url" content="http://tutoriales.byethost10.com/blackninja" />
	<meta property="og:type"  content="article" />
	<meta property="og:title"   content="black ninja" />
	<meta property="og:description" content="Aprende a crear juegos en línea HTML5 con canvas, gráficos SVG con datos Json, javascript con POO y bases de datos SQL" />
	<meta property="og:image"  content="http://tutorialesatualcance.com/img/cursoCANVAS.jpg" />
	<meta property="fb:app_id"  content="1922319868005008" />

	<!--=====================================
	PANTALLA DE INICIO DISPOSITIVOS TOUCH
	======================================-->

	<meta name="viewport" content="user-scalable=no, maximum-scale=1.0, minimal-ui"/>

	<!-- for ios 7 style, multi-resolution icon of 152x152 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" sizes="152x152" href="views/img/touch/favicon152.png">

	<!-- Chrome on Android, multi-resolution icon of 196x196 -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="views/img/touch/favicon196.png">

	<title>BLACK NINJA | JUEGO DE PLATAFORMA</title>

	<link rel="icon" href="views/img/intro/favicon.png">
	<link href="views/css/estilo.min.css" type="text/css" rel="stylesheet" media="">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
	<!-- font-family: 'Patrick Hand', cursive; -->

	<script src="views/js/screenfull.min.js"></script>

</head>
<body>

	<!--=====================================
	PANTALLA VERTICAL
	======================================-->

	<div id="vertical"></div>

	<!--=====================================
	MARCO
	======================================-->

	<div id="marco"></div>

	<!--=====================================
	CONTENEDOR
	======================================-->

	<div id="contenedor">

		<?php

			if(isset($_GET["validar"])){

			$validar = $_GET["validar"];

				switch($validar){
					case "inicio":
					include "modules/inicio.php";
					break;
					case "salir":
					include "modules/salir.php";
					break;
					default:
					include "modules/ingreso.php";
				}

			}else{
			
				include "modules/ingreso.php";

			}

		?>

	</div>



	<!--=====================================
	CREDITOS
	======================================-->

	<footer>

		<center>
		<p>Juego desarrollado por <strong>Esteban Luna</strong></p>
		</center>

	</footer>

<script src="views/js/variables_y_propiedades.min.js"></script>
<script src="views/js/inicio.min.js"></script>
<script src="views/js/juego.js"></script>
<script src="views/js/lienzo.min.js"></script>
<script src="views/js/ampliarCanvas.min.js"></script>

<!-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1922319868005008',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script> -->


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '654682188401696',
      cookie     : true,
      xfbml      : true,
      version    : 'v5.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>
