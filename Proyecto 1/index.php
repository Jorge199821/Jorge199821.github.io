<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="container">
    <center>
      <h1>Formulario</h1>
    </center>
    <br>
    <center>
      <h2>Datos Perosnales</h2>
    </center>
    
      <form action="main.php" method="POST">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" class="form-control" placeholder="Introduce el Nombre" name="name">
        </div>
        <div class="form-group">
          <label for="surname1">Apellido 1:</label>
          <input type="text" class="form-control" placeholder="Introduce el Apellido 1" name="surname1">
        </div>
        </div>
        <div class="col-sm-4">
        <div class="form-group">
          <label for="surname2">Apellido 2:</label>
          <input type="text" class="form-control" placeholder="Introduce el Apellido 2" name="surname2">
        </div>
        <div class="form-group">
          <label for="dni">DNI:</label>
          <input type="text" class="form-control" placeholder="Introduce el DNI con letra" name="dni">
        </div>
        </div>
        <div class="col-sm-4">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" placeholder="Introduce el Email" name="email">
        </div>
        <div class="form-group">
          <label for="phone">Teléfono:</label>
          <input type="text" class="form-control" placeholder="Introduce el numero de Telefono" name="phone">
        </div>
        </div>
        <br>
        <center>
          <h2>Dirección</h2>
        </center>
        <div class="form-group">
          <label for="city">Población:</label>
          <input type="text" class="form-control" placeholder="Introduce tu Poblacion" name="city">
        </div>
        <div class="form-group">
          <label for="street">Calle:</label>
          <input type="text" class="form-control" placeholder="Introduce tu Calle" name="street">
        </div>
        <div class="form-group">
          <label for="number">Numero:</label>
          <input type="text" class="form-control" placeholder="Introduce el Numero" name="number">
        </div>
        <div class="form-group">
          <label for="floor">Planta:</label>
          <input type="text" class="form-control" placeholder="Introduce tu Planta" name="floor">
        </div>
        <center>
          <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </center>
      </form>
    </div>


</body>

</html>

