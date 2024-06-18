<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sube una foto</title>
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
<script>
$(document).ready(function() {
    $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
                } else {
					alert('Formato de imagen incorrecto.');
				}
            }
        });
		return false;
    });
});
</script>
</head>

<body style="background-color: #FAFAED">



<div class="wrapper">

<header>


	<img src="imagenes/hazte.jpg" width=100% alt=""/><br>	

</header>
<!-- INICIO SECCION -->
<section>

	
	<div>
<div class="logo"><img src="imagenes/separador.jpg" width=100% alt=""/></div>	
	
	
	
	</div>
	
</section>	
<!-- FIN SECCION -->
	
    
            
<div class="hola">

  <form method="post" action="#" enctype="multipart/form-data">
	<div class="card">
					<img class="card-img-top" src="imagenes/default-avatar.png">
					<div class="card-body">
						<h5 class="card-title" font-family="Monserrat">Sube una foto</h5>
						<p class="card-text">Pulsa <b>"Hazte una foto"</b><br>
					  Selecciona "Cámara" o sube una foto guardada.<br> 
					  Pulsa <b>"Subir foto"</b><br>
					  Tarda un poquito. Se paciente.<br>
						  Cuando veas la foto aquí arriba, estará subida.<br>
Luego la podrás ver en la galería de la celebración.
						</p>
						<div class="form-group">
							<label for="image">
							<img src="imagenes/foto.png" width="100%"/>
							</label>
							<input type="file" class="form-control-file" name="image" id="image">
						</div>


       
       <input type="image" class="upload" value="Subir"
       src="imagenes/subir.png" onmouseover="this.src='imagenes/subiendo.gif'" onmouseout="this.src='imagenes/subiendo.gif'" width="100%">
       
						
		</div>
		<div class="columnas"><a href="galeria.php"><img src="imagenes/botongaleria.png" width=100% alt=""/></a></div>
	  </div>
    </form>
    
    		<div class="columnas"><a href="index.html"><img src="imagenes/volver.png"  width=55% alt=""/></a></div>
    
</div>
   
          
</div>
    
   
    
</body>
</html>
