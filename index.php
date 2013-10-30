<?php session_start()?>
<!DOCTYPE html>
<html lang="es">
   <header>
      <title>
         .:: La tiendita de la esquina ::.
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link href="css/estilos.css" type="text/css" rel="stylesheet"/>
	  <link href="css/estiloExtra.css" type="text/css" rel="stylesheet"/>
      <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
      <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet"/>
      <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
      <script src="js/scriptBase.js" type="text/javascript"></script>
   </header>
   <body>
      <div id="contenedor" class="">
         <?php include("include/cabecera.php");?>
         <div class="clearfix"></div>
         <?php include("include/barra_categorias_productos.php") ?>
         <div class="clearfix"></div>
         <div id="cuerpo">
            <!--Código Lucho */-->
            <?php
               include("procesos/validarContenido.php");
               //include('pags/registroB.php');
               ?>
         </div>
       
      </div>
      <div class="clearfix"></div>
      <?php include("include/pie_de_pagina.php") ?>
      </div>
   </body>
</html>