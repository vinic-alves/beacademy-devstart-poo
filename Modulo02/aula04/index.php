<?php

include 'Cliente.php';
include 'Gestor.php';
include 'Usuario.php';

$c1 = new Cliente();
$c1->setNome('Chiquim');

$g1 = new Gestor();
$g1->setNome('Zezim');

var_dump($c1);
var_dump($g1);

