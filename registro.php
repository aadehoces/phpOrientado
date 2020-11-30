<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f0417ae4ab.js" crossorigin="anonymous"></script>
	<title>Iliberis</title>
</head>
<body>
<header>
	<img class="w-100" src="img/banner.jpg">
</header>
<div class="container mt-4">


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="sesion.php" class="float-right btn btn-outline-primary mt-1">Iniciar sesión</a>
	<h4 class="card-title mt-2">Registro</h4>
</header>
<article class="card-body">
<form>
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" name="nombre">
		</div> 
		<div class="col form-group">
			<label>Apellidos</label>
		  	<input type="text" class="form-control" name="Apellidos">
		</div> 
	</div> 
	<div class="form-group">
		<label>Email </label>
		<input type="email" class="form-control" placeholder="">
		<small class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie</small>
	</div> 
	<div class="form-row">
		<div class="form-group col-md-12">
		  <label>Direccion</label>
		  <input type="text" class="form-control" name="direccion">
		</div> 
	</div> 
	<div class="form-group">
		<label>Contraseña</label>
	    <input class="form-control" type="password" name="Contraseña">
	</div>  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Registrar  </button>
    </div>     
    <small class="text-muted">
Al hacer clic en el botón "Registrarse", confirma que acepta nuestros Términos de uso y Política de privacidad.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">¿Tienes cuenta? <a href="sesion.php">Inicar sesion</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<br>

<?php
include 'Templates/footer.php'

?>

