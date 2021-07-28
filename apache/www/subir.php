<?php

	$nombre_usuario = $_GET['nombre']; //recuperamos el nombre del usuario con $_GET desde la funcion javascript
	$sexo = $_GET['sexo']; //recuperamos el sexo con $_GET desde la funcion javascript
 	 //Como no sabemos cuantos archivos van a llegar, iteramos la variable $_FILES
  	$ruta="archivos/"; //definimos la ruta donde se almacenaran los archivos
  	foreach ($_FILES as $key) {
	    if($key['error'] == UPLOAD_ERR_OK ){ //Verificamos si se subio correctamente
	      	$nombre = $key['name'];//Obtenemos el nombre del archivo
	      	$temporal = $key['tmp_name']; //Obtenemos el nombre del archivo temporal
	      	$tamano= ($key['size'] / 1000)."Kb"; //Obtenemos el tamaño en KB
	      	move_uploaded_file($temporal, $ruta . $nombre); //Movemos el archivo temporal a la ruta especificada
	      	//El echo es para que lo reciba jquery y lo ponga en el div "cargados"
	    echo "
	    	<div id='subido'>
	        <h2><strong>Nombre del archivo: ".$nombre."</strong></h2><br />
	        <h2><strong>Tamaño del archivo: ".$tamano."</strong></h2><br />
	        <h2><strong>Nombre: ".$nombre_usuario."</strong></h2><br />
	        <h2><strong>Sexo: ".$sexo."</strong></h2><br />
	        <hr>
	        </div>
	      ";
	    }else{
	    	echo $key['error']; //Si no se cargo mostramos el codigo del error
	    }
  	}

  	/* ============================================================================ */
  	/*																				*/
  	/*			Ahora lo unico que resta por hacer es conectarse a mysql y 			*/
  	/*			enviar las variables a las bases de datos, para eso puedes 			*/
  	/*			ingresar a este link donde encontraras la clase que hablamos 		*/
  	/*			sobre PHP y mysql, y donde explicamos como guardar datos en 		*/
  	/*			ella, Link : https://www.youtube.com/watch?v=ABD6kWbk-PE			*/
	/*																				*/
  	/*			Atte,																*/
  	/*			Pro-Gramadores														*/
  	/*																				*/
  	/* ============================================================================ */
?>