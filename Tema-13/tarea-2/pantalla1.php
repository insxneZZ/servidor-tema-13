<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <button onclick="siguientePantalla()">Continuar</button>
    <script>
      function siguientePantalla() {
        if (confirm("Estas seguro?")) {
          location.href = "pantalla2.php?valor=0";
        }
      }
    </script>
  </body>
</html>
