<?php

use Source\Models\Usuario;

require __DIR__.'../../../vendor/autoload.php';

$usuario = new Usuario();

$usuario->nome = $_POST['NomePessoa'];
$usuario->sobrenome = $_POST['UltimoNome'];
$usuario->porcentagem = $_POST['Porcentagem'];

$usuario->save();

header('location: ../../index.php');