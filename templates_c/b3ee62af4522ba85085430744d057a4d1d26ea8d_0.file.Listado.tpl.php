<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 21:16:27
  from 'C:\xampp\htdocs\examen\templates\Listado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed15f8b8f0ab0_08831805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3ee62af4522ba85085430744d057a4d1d26ea8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\examen\\templates\\Listado.tpl',
      1 => 1590779782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed15f8b8f0ab0_08831805 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="row">
    <div class="col s8 push-s2  #7cb342 light-green darken-1">
    <font color="White" face="Impact">
    <h5 class="center-align">Inventario General de Mercaderías</h5>
    </font>
    </div>
  </div>

  <form class = "col s8 center-align" method="post" action="?controller=Inventario&action=Mostrar">
  <div class = "row">
    <div class="col s8 push-s2">
     
    <table class="striped #33691e light-green darken-4 responsive-table">
        <thead>
          <tr>
              <th><font color="White"><b>Nombre</b></font></th>
              <th><font color="White"><b>Descripcion</b></font></th>
              <th><font color="White"><b>Precio</b></font></th>
              <th><font color="White"><b>Cantidad</b></font></th>
          </tr>
        </thead>



        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dato']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
          <tr>
            <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Nombre'];?>
 </b></td>
            <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Descripcion'];?>
 </b></td>
            <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Precio'];?>
 </b></td>
            <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Cantidad'];?>
 </b></td>
          </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </table>
    </div>
    </div>
  </form>
<?php }
}
