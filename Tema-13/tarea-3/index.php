<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="destino.php" method="get">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required /><br /><br />

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required /><br /><br />

      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
