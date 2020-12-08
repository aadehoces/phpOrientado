<?php

require_once 'controlers/Sessions.php';
require_once 'controlers/Cliente.php';
require_once 'controlers/Cookie.php';
require_once 'controlers/pizza/Pizza.php';
require_once 'controlers/pizza/PrepararPizza.php';

require_once 'controlers/pizza/Carbonara.php';
require_once 'controlers/pizza/Extravaganza.php';
require_once 'controlers/pizza/BBQ.php';
require_once 'controlers/pizza/AlGusto.php';

//comprueba si se ha iniciado sesion
if (isset($_COOKIE["id_session"])) {
  $sesion=new Session($_COOKIE["id_session"]);
  $Cliente=$sesion->getAttribute("cliente");
  if ($_POST) {
    //comprueba si le hemos dado al boton encargar
    if (isset($_POST["encargar"])) {
      //comprueba si la pizza es al gusto
      if ($_POST["encargar"]=="AlGusto") {
        //añade ingredientes a un array
        $Ingredientes = array();
        if (isset($_POST["queso"])) {
          $Ingredientes[]=$_POST["queso"];
        }
        if (isset($_POST["champiñon"])) {
          $Ingredientes[]=$_POST["champiñon"];
        }
        if (isset($_POST["bacon"])) {
          $Ingredientes[]=$_POST["bacon"];
        }
        if (isset($_POST["jamon"])) {
          $Ingredientes[]=$_POST["jamon"];
        }
        if (isset($_POST["aceitunas"])) {
          $Ingredientes[]=$_POST["aceitunas"];
        }
        if (isset($_POST["piminetos"])) {
          $Ingredientes[]=$_POST["piminetos"];
        }
        if (isset($_POST["cebolla"])) {
          $Ingredientes[]=$_POST["cebolla"];
        }
        if (isset($_POST["tomate"])) {
          $Ingredientes[]=$_POST["tomate"];
        }
        if (isset($_POST["kebab"])) {
          $Ingredientes[]=$_POST["kebab"];
        }
        //encarga pizza al gusto
        $Cliente->encarga(new AlGusto(),$_POST["masa"],$_POST["bordes"],$Ingredientes);
      }else{
        //encrga pizzas
        $Cliente->encarga(new $_POST["encargar"]());
      }
      //guardamos cambios del objeto cliente
      $sesion->setAttribute("cliente", $Cliente);
      //si le damos a eliminar
    }elseif (isset($_POST['eliminar'])) {
      $Cliente->deletePizza($_POST['id']);
       $sesion->setAttribute("cliente", $Cliente);
      //si le damos a cerrar
    }elseif (isset($_POST["Cerrar"])) {
      $sesion->destroySession();
      $cookie=new Cookies();
      $cookie->delete_cookie("id_session"); 
      header('Location: index.php');
    //si le damos a confirmr
    }elseif (isset($_POST["confirmar"])) {
      $Cliente->borrarPizzas();
      $sesion->setAttribute("cliente", $Cliente);
      header('Location: index.php');

    }

  }
  
}else{
  header('Location: Templates/sesion.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f0417ae4ab.js" crossorigin="anonymous"></script>
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<title>Iliberis</title>
</head>
<body>
<header>
	<img class="w-100" src="img/banner.jpg">
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carrito.php"><span class="letra"><i class="fas fa-shopping-cart"></i>(<?php
        echo $Cliente->contarPizzas();
          ?>)</a>
      </li>      
    </ul>
    
    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button class="btn  my-2 my-sm-0 btn-outline-dark mr-2" type="submit" name="Cerrar">Cerrar sesión</button>
            
    </form>
  </div>
</nav>