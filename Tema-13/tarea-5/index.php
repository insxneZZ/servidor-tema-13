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

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="dni">Dni:</label>
        <input type="text" id="dni" name="dni" pattern="\d{7,8}[A-Za-z]" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="codigoPostal">Codigo Postal:</label>
        <input type="number" id="codigoPostal" name="codigoPostal" required>

        <label for="puestoTrabajo">Puesto Trabajo:</label>
        <input type="text" id="puestoTrabajo" name="puestoTrabajo" required>

        <label for="salario">Salario:</label>
        <input type="number" id="salario" name="salario" required>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>