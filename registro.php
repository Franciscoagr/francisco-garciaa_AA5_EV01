
<?php
$base_de_datos = [
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if (array_key_exists($usuario, $base_de_datos)) {
        echo "El usuario ya existe. Por favor, elige otro nombre de usuario.";
    } else {
        $base_de_datos[$usuario] = $contrasena;
        echo "Registro exitoso para el usuario: $usuario";
    }
}
?>
