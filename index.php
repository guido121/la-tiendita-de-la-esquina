<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <title>
         .:: La tiendita de la esquina ::.
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link href="css/estilos.css" type="text/css" rel="stylesheet"/>
	  <link href="css/estiloExtra.css" type="text/css" rel="stylesheet"/>
      <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
      <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet"/>
      <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
      <script src="js/scriptBase.js" type="text/javascript"></script>
<<<<<<< HEAD
      <script src="js/bootbox.min.js" type="text/javascript"></script>
   </head>
=======
	  <script src="js/scriptEfectos.js" type="text/javascript"></script>
   </header>
>>>>>>> 375ac95f4ed869b32e2518e6d8390211cee7437c
   <body>
      <div id="contenedor" >
         <?php include("include/cabecera.php");?>
<<<<<<< HEAD
            <div class="clearfix"></div>
            <?php include("include/barra_categorias_productos.php") ?>
            <div class="clearfix"></div>
            <div style="margin-bottom:50px;">
            <div id="cuerpo">
                  <?php
                     include("procesos/validarContenido.php");
                     //include('pags/registroB.php');
                     ?>
               <div class="clearfix"></div>
               </div>
            
            
            </div>
             
=======
         <div class="clearfix"></div>
         <?php include("include/barra_categorias_productos.php") ?>
         <div class="clearfix"></div>
         <div id="cuerpo">
            <!--Código Lucho */-->
            <?php
               include './../procesos/validarContenido.php';
               //include('pags/registroB.php');
               ?>
         </div>
       
>>>>>>> 375ac95f4ed869b32e2518e6d8390211cee7437c
      </div>
      <div class="clearfix"></div>
      <?php include("include/pie_de_pagina.php") ?>
      <div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Hello world!
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
    </div>
  </div>
</div>
   </body>
</html>