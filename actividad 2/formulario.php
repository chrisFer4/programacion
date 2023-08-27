<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/styles.css" rel="stylesheet">

</head>


<body>
   

            <!--inicio de formulario-->
    <div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Formulario de contacto</h2>
				<h4>permítenos contactarte!</h4>
			</div>
		</div>

		<div class="col-md-9">
			<div class="contact-form">
			<form action="./function/insert.php" method="post">
                <!--campo de nombres-->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nombre">nombres:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="nombre" name="nombre">
				  </div>
				</div>
                <!--campo de apellidos-->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="apellido">apellidos:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="apellido" name="apellido">
				  </div>
				</div>
                <!--campo de correo electrónico-->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">correo electrónico:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email">
				  </div>
				</div>
                <!--campo de teléfonos-->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono">teléfono:</label>
                    <div class="col-sm-10">
                      <input type="telefono" class="form-control" id="telefono" name="telefono">
                    </div>
                  </div>
                <!--campo de comentarios-->
				<div class="form-group">
                <label class="control-label col-sm-2" for="comentario">Comentarios:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comentario" name="comentario"></textarea>
				  </div>
				</div>
                        <!--campo de botón submit-->
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
        <!--fin de formulario-->

</body>
</html>