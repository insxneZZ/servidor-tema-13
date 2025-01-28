<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="validar.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="18" required>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>