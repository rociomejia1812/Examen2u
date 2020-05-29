<!DOCTYPE html>
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



        {foreach $dato as $d}
          <tr>
            <td><b> {$d['Nombre']} </b></td>
            <td><b> {$d['Descripcion']} </b></td>
            <td><b> {$d['Precio']} </b></td>
            <td><b> {$d['Cantidad']} </b></td>
          </tr>

        {/foreach}

      </table>
    </div>
    </div>
  </form>
