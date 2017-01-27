<?php
require 'conexion.php';
require 'usuario.php';

$usuario = $_POST['txtUsuario'];
$passwd = $_POST['txtPass'];

header('Content-Type: application/json');
echo Usuario::login($usuario,$passwd);

