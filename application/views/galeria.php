<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/estilos4.css">
  <style type="text/css">
  
   }


  </style>
</head>
<body>
 <?php include("cabecera.php"); ?> 




<!--GALERIA-->


<div class="container" style="margin-top: 5%">


  <div class="row">

    <div class="col-md-4">
      <div class="thumbnail">
         <img  src="<?php echo base_url();?>imagenes2/ga1.jpg" alt="Lights" style="width:100%;height: 260px">
          <div class="caption">
            <p class="texto" id="texto2" onmouseover="modificarTexto()" style="font-size: 14px">L</p>
          </div>
  
      </div>
      <div class="thumbnail">
         <img  src="<?php echo base_url();?>imagenes2/ga1.jpg" alt="Lights" style="width:100%;height: 260px">
          <div class="caption">
            <p class="texto" id="texto2" onmouseover="modificarTexto()" style="font-size: 14px">L</p>
          </div>
  
      </div>
    </div>



    <div class="col-md-4">
      <div class="thumbnail">
     
        <img src="<?php echo base_url();?>imagenes2/ga2.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p class="texto" id="texto1" onmouseover="modificarTexto()" onmouseover="modificarTexto()" style="font-size: 14px">La hist.</p>
          </div>
        
      </div>
       <div class="thumbnail">
     
        <img src="<?php echo base_url();?>imagenes2/ga2.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p class="texto" id="texto1" onmouseover="modificarTexto()" onmouseover="modificarTexto()" style="font-size: 14px">La hist.</p>
          </div>
        
      </div>
    </div>


    <div class="col-md-4">
      <div class="thumbnail">
          <img src="<?php echo base_url();?>imagenes2/ga3.jpg" alt="Fjords" style="width:100%;height: 260px">
          <div class="caption">
            <p class="texto" id="texto3"  onmouseover="modificarTexto()" onmouseout="vuelveTexto()" onmouseover="modificarTexto()" style="font-size: 14px">La Feria y Fiestas de l.</p>
          </div>
        
      </div>
      <div class="thumbnail">
          <img src="<?php echo base_url();?>imagenes2/ga3.jpg" alt="Fjords" style="width:100%;height: 260px">
          <div class="caption">
            <p class="texto" id="texto3"  onmouseover="modificarTexto()" onmouseout="vuelveTexto()" onmouseover="modificarTexto()" style="font-size: 14px">La Feria y Fiestas de l.</p>
          </div>
        
      </div>
    </div>



  </div>
</div>






   <?php include("pie.php"); ?> 



</body>
</html>