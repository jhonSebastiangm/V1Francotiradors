<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <link rel="stylesheet" href="../../../web/css/style.css">
</head>

<body>
  <div class="containerRegister">
    <h1 class="titleRegister">Registro</h1>
    <br />
    <br />
    <div class="card">
      <form id="registro"> 
      <div>
        <label class="labelRegister" for="NombreUsuario">Nombre Usuario</label>
        <input class="inputRegister" id="NombreUsuario" name="NombreUsuario" type="text" value="">
      </div>
      <div>
        <label class="labelRegister" for="email">Email:</label>
        <input class="inputRegister" id="EMAIL" name="EMAIL" type="email" value="">
      </div>
      <div>
        <label class="labelRegister" for="pass">Password</label>
        <input class="inputRegister" id="pass" name="pass" type="pass" value="">
      </div>
      <input type="submit" class="btnRegister" value="Enviar">
    </form>
    </div>
  </div>
  <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="../../../web/js/registro.js"></script>
</body>

</html>