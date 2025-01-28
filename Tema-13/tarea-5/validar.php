<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = htmlspecialchars(trim($_GET['nombre']), ENT_QUOTES, 'UTF-8');
    echo "Nombre filtrado: " . $nombre . "<br>";
    $apellido2 = $_GET['apellido'];
    echo "Apellido sin filtrar: " . $apellido2 . "<br>";
}
