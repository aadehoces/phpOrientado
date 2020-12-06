<?php
	include '../controlers/iniciar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f0417ae4ab.js" crossorigin="anonymous"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Iliberis</title>
</head>
<body>
<header>
	<img class="w-100" src="../img/banner.jpg">
</header>
<?php 
		if (isset($mensaje) && !empty($mensaje) ) {?>
<div class="alert alert-danger" role="alert">
  		<?php echo $mensaje; 
  		$mensaje="";
  		?>
	</div>
<?php } ?>
<div class="container mt-5 mb-4">
	
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="contraseña">
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes cuenta? <a href="registro.php"> Registrate</a>
				</div>
				
			</div>
		</div>
	</div>
</div>



<?php
include 'footer.php';
?>