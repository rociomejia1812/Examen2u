<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 18:52:48
  from 'C:\xampp\htdocs\examen\templates\IngresoP.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed13de0568a72_43770696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44bb55fe7d8a09011251fce126be354234bcddeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\examen\\templates\\IngresoP.tpl',
      1 => 1590771164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed13de0568a72_43770696 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="framework/materialize/css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home</title>
    </head>

    <body>
      <div class="card-panel #bf360c deep-orange darken-4">
     
      <h1 class="center-align">Ingreso de Productos</h1>
    <br>
    <hr>
    <br>
    <div class="container">
      <div class="row">
           <div class=" "col s9 center-align">
            <form method="post" action="?controlador=usuario&metodo=login">

      
           <div class="input-field col s6 center-align">
          <input placeholder="Nombre" name="producto" id="producto" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>

           <div class="row">
           <div class="input-field col s6">
          <input placeholder="Descripción" name="descripcion" id="descripcion" type="text" class="validate">
          <label for="descripcion">Descripcion</label>
        </div>

        <div class="row">
           <div class="input-field col s6">
          <input placeholder="Cantidad" name="cantidad" id="cantidad" type="text" class="validate">
          <label for="cantidad">Cantidad</label>
        </div>

        <div class="row">
           <div class="input-field col s6">
          <input placeholder="Precio" name="precio" id="precio" type="text" class="validate">
          <label for="precio">Precio</label>
        </div>

       <button class="btn waves-effect #212121 grey darken-4
" type="submit" name="action">Guardar
    <i class="material-icons right">send</i>
  </button>
        
      </div>
    </div>

      <!--JavaScript at end of body for optimized loading-->
      <?php echo '<script'; ?>
 type="text/javascript" src="framework/materialize/js/materialize.js"><?php echo '</script'; ?>
>
    </body>
<footer>
        <div class="row blue-grey darken-1">
          <div class="s 12 center-align">
            <span class="white-text ">
              <font size: 5 face: Impact>
              <b>
              Rocio 2020
              </b>
              </font>
            </span>
          </div>
        </div>
    </footer>
        
      </div>      
<!--JavaScript at end of body for optimized loading-->
      <?php echo '<script'; ?>
 type="text/javascript" src="Framework/Materialize/js/materialize.js"><?php echo '</script'; ?>
>
    </body>
  </html>

  
<?php }
}
