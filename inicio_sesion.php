<?php
$base_de_datos = [
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if (array_key_exists($usuario, $base_de_datos) && $base_de_datos[$usuario] == $contrasena) {
        echo "Inicio de Sesión exitoso para el usuario: $usuario";
    } else {
        echo "Error en la autenticación. Verifica tus credenciales.";
    }
}
?>
