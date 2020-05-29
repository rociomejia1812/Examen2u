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
      <script type="text/javascript" src="framework/materialize/js/materialize.js"></script>
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
      <script type="text/javascript" src="Framework/Materialize/js/materialize.js"></script>
    </body>
  </html>

  
