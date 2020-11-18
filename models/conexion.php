<?php

class Conexion{

	public function conectar(){

		// local
		$link = new PDO("mysql:host=localhost;dbname=blackninja","root","");
		// Producción
		//$link = new PDO("mysql:host=localhost;dbname=blackninja","eshos_24967626","demigod");
		return $link;

	}

}
