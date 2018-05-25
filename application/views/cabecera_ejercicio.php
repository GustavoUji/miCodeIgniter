<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Granada, ciudad paraiso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href=" .css">
  <style type="text/css">
    /* posible css, en otro fichero y aquí mismo */

  </style>
</head>
<body>
  <!--NAVEGADOR-->
  <header>
  <nav  style="background-color:#70724D;" >
  <div class="container-fluid">
    <div class="navbar-header">
       <h1 class="color text-center">GRANADA</h1>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url();?>/ejercicio_trozos">Inicio</a></li>
      <li><a href="<?php echo site_url();?>/ejercicio_trozos/historia">Historia</a></li>
      <li><a href="<?php echo site_url();?>/ejercicio_trozos/galeria">Galeria</a></li>
      <li><a href="<?php echo site_url();?>/ejercicio_trozos/region">Región</a></li>
      <li><a href="<?php echo site_url();?>/ejercicio_trozos/usuario">Usuario</a></li>
    </ul>
  </div>
</nav>
</header>