<?php 
session_start();
  if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
  }else{
      if($_SESSION['usuario']=='ok'){
        $nombreUsuario=$_SESSION["nombreUsuario"];
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Administrador Leo GYM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
       
    <?php $url="http://".$_SERVER['HTTP_HOST']."/gimnasio" ?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador GYM <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/servicios.php">Servicios</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/cerrar.php">Cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
        </div>
    </nav>

     <div class="container">
<br/>
         <div class="row">