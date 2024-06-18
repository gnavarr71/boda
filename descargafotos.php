<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vuestras fotos</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no">
 <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
 <link type="text/css" rel="stylesheet" href="css/style.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="js/lightbox-plus-jquery.min.js"></script>
  <link rel="stylesheet" href="css/lightbox.min.css">
</head>

<body style="background-color: #FAFAED">
<?php
// drvy
$carpeta = "images/";
$permitidos = array("jpg","png");
$archivo_final = "fotosboda.zip";  // .zip *
 
$zip = new ZipArchive();
if ($zip->open($archivo_final, ZIPARCHIVE::CREATE)==TRUE){
	if ($abrir = opendir($carpeta)) {
		while (false !== ($archivo = readdir($abrir))) {
			$extension = substr($archivo, strrpos($archivo, ".") + 1);
			if (in_array($extension, $permitidos)) {
				$zip->addFile($carpeta.$archivo,$archivo);
			}
		}
		closedir($abrir);
	} else {echo " no se ha podido abrir la carpeta";}
} else {echo "No se ha podido crear un archivo zip!";}
$zip->close();

?>


<div class="wrapper">

<header>


		<div class="logo"><img src="imagenes/cabecera.jpg" width=100% alt=""/></div>

</header>
<!-- INICIO SECCION -->
<section>

	
	<div>
	<div class="logo"><img src="imagenes/separador.jpg" width=100% alt=""/></div>

		<div class="titulo">Descargar todas las fotos</div>

	
	
	</div>
	
</section>	
<!-- FIN SECCION -->
	

    
            
<div class="hola"> <a href="fotosboda.zip"><img src="imagenes/descarga.png" width="100%"/></a>

       		<div class="columnas"><a href="index.html"><img src="imagenes/volver.png"  width=55% alt=""/></a><span style="text-align: center"></span></div>


	
</div>
    
</div>
    
   
    
</body>
</html>
