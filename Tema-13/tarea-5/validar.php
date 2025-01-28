<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nombre = isset($_GET['nombre']) ? htmlspecialchars(trim($_GET['nombre'])) : '';

    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/", $nombre)) {
        echo "El nombre solo puede contener letras y espacios.<br>";
    }
    
    $apellido = isset($_GET['apellido']) ? htmlspecialchars(trim($_GET['apellido'])) : '';

    $email = isset($_GET['email']) ? filter_var(trim($_GET['email']), FILTER_SANITIZE_EMAIL) : '';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no es válido.<br>";
    }

    $dni = isset($_GET['dni']) ? trim($_GET['dni']) : '';
    if (!preg_match('/^\d{7,8}[A-Za-z]$/', $dni)) {
        echo "El DNI no es válido. Debe tener 8 dígitos y una letra.<br>";
    }

    $telefono = isset($_GET['telefono']) ? trim($_GET['telefono']) : '';
    if (!is_numeric($telefono) || strlen($telefono) != 9) {
        echo "El teléfono no es válido. Debe tener 9 dígitos.<br>";
    }

    $direccion = isset($_GET['direccion']) ? htmlspecialchars(trim($_GET['direccion'])) : '';

    $codigoPostal = isset($_GET['codigoPostal']) ? intval($_GET['codigoPostal']) : '';

    $puestoTrabajo = isset($_GET['puestoTrabajo']) ? htmlspecialchars(trim($_GET['puestoTrabajo'])) : '';

    $salario = isset($_GET['salario']) ? floatval($_GET['salario']) : 0;

    echo "Nombre: $nombre <br>";
    echo "Apellido: $apellido <br>";
    echo "Email: $email <br>";
    echo "DNI: $dni <br>";
    echo "Teléfono: $telefono <br>";
    echo "Dirección: $direccion <br>";
    echo "Código Postal: $codigoPostal <br>";
    echo "Puesto de Trabajo: $puestoTrabajo <br>";
    echo "Salario: $salario <br>";
}
