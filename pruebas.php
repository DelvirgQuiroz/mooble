<?php
require 'conexion.php';
require 'usuario.php';
// se reciben los parametros del formulario
$user = 'Delvirg';
$pwd = '123';
$usuario = Usuario::login($user, $pwd);
var_dump($usuario);