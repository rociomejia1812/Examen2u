<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 20:25:44
  from 'C:\xampp\htdocs\examen\templates\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed153a8981cd0_44146726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f40ece7fc60ce255c2510d147a928bcfacb61621' => 
    array (
      0 => 'C:\\xampp\\htdocs\\examen\\templates\\Menu.tpl',
      1 => 1590776693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed153a8981cd0_44146726 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="card-panel #455a64 blue-grey darken-2">
       <div class="container">
      <h1 class="center-align">Bienvenido</h1>
    </div>
    <br>
    <hr>
    <br>
    <div class="container">
      <div class="row">
           <div class=" "col s9 center-align">
            <form method="post" action="?controlador=usuario&metodo=login">

    <div class="container">
  <div class="collection">
     <a href="?controller=Ingresar&action=CargarOp&op=Ingresar" class="collection-item"><b>Ingresar Producto</b></a>
     <a href="?controller=Mostrar&action=CargarOp&op=MostrarP" class="collection-item"><b>Inventario General</b></a>
     
  </div>
</div>
</body>
</html>
<?php }
}
