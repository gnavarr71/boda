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



<div class="wrapper">

<header>


		<div class="logo"><img src="imagenes/titulogaleria.jpg" width=100% alt=""/></div>

</header>
<!-- INICIO SECCION -->
<section>

	
	<div>
	<img src="imagenes/selfie.jpg" width=95% alt=""/>
	<div class="logo"><img src="imagenes/separador.jpg" width=100% alt=""/></div>

		<div class="titulo">Fotos del Evento</div>

	
	
	</div>
	
</section>	
<!-- FIN SECCION -->
	

    
            
<div class="hola">

       		<div class="columnas"><a href="index.html"><img src="imagenes/volver.png"  width=55% alt=""/></a><span style="text-align: center"></span></div>

<?php
$folder_path = 'images/'; 
$num_files = glob($folder_path . "*.{JPG,jpeg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folder_path); 
if($num_files > 0){
 while(false !== ($file = readdir($folder)))  {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') {
   ?>
    
    <a class="example-image-link tfoto" href="<?php echo $file_path; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo $file_path; ?>" width=40% HSPACE=3 VSPACE=5/></a>
     <?php
  }}}
closedir($folder);
?>  
	
</div>
    		<div class="logo"><a href="descargafotos.php"><img src="imagenes/descarga.png" width=55% alt=""/></a></div>

</div>
    
   
    
</body>
</html>
