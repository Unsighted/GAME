<!--=====================================
INGRESO
======================================-->

<div id="ingreso">

	<div id="instruccionesTouch">

		<button onclick="inicio.salirInstructivo()">X</button>

		<img src="views/img/touch/instructivoTOUCH.jpg">

	</div>

	<div id="ingresoFacebook">

		<img src="views/img/intro/facebook.svg">
		<button onclick="inicio.iniciar()">Ingresar con Facebook</button>

	</div>

	<div id="ingresoSinFacebook">

		<input type="email" placeholder="Ingresa tu email" id="email" value="">
		<input type="text" placeholder="Ingresa tu nombre" id="nombre" value="">

		<center>

			<button onclick="inicio.iniciar()">Ingresar</button>

		</center>

	</div>

</div>
