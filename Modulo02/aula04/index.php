<?php



include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php'; 


$c1 = new Cliente('chiquim@email.com', '123456');
$c1->setNome('Chiquim');
$c1-> setDataCadastro('01/01/2019');

$g1 = new Gestor('zezin@email.com', 'zezin123',6000);
$g1->setNome('Zezim');

$gg1 = new GestorGeral('maria@hotquente.com','ula123', 90000);

var_dump($c1);
var_dump($g1);
var_dump($gg1);

