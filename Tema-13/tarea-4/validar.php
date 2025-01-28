<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<h1>Validación de datos:</h1>";

    $errores = [];

    // Validar cada campo con isset y filtrar datos
    $nombre = isset($_GET['nombre']) ? trim($_GET['nombre']) : '';
    $apellido = isset($_GET['apellido']) ? trim($_GET['apellido']) : '';
    $dni = isset($_GET['dni']) ? trim($_GET['dni']) : '';
    $email = isset($_GET['email']) ? trim($_GET['email']) : '';
    $edad = isset($_GET['edad']) ? (int)$_GET['edad'] : '';

    // Función para validar el DNI
    function validar_dni($dni)
    {
        if (preg_match('/^\d{8}[A-Za-z]$/', $dni)) {
            $numero = substr($dni, 0, 8);
            $letra = strtoupper(substr($dni, -1));
            $letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
            $indice = $numero % 23;
            return $letra === $letras_validas[$indice];
        }
        return false;
    }

    // Validaciones
    if (empty($nombre)) {
        $errores[] = 'El campo Nombre es obligatorio.';
    }

    if (empty($apellido)) {
        $errores[] = 'El campo Apellido es obligatorio.';
    }

    if (empty($dni)) {
        $errores[] = 'El campo DNI es obligatorio.';
    } elseif (!validar_dni($dni)) {
        $errores[] = 'El DNI no es válido. Asegúrate de que el formato sea correcto y que la letra coincida.';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'El campo Email es obligatorio o no tiene formato válido.';
    }

    if (empty($edad) || $edad < 18 || $edad > 100) {
        $errores[] = 'El campo Edad es obligatorio y debe ser un número entre 18 y 100.';
    }

    // Mostrar errores o datos
    if (!empty($errores)) {
        echo "<h2>Errores:</h2><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Datos enviados correctamente:</h2>";
        echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
        echo "<p>Apellido: " . htmlspecialchars($apellido) . "</p>";
        echo "<p>DNI: " . htmlspecialchars($dni) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Edad: $edad</p>";
    }
} else {
    echo "<p>No se ha enviado ningún formulario.</p>";
}
