<?php

include 'Produto.php';



$p1 = new Produto();
$p1->getNome('Tenis para corrida');
$p1->setValor(299);

// $p2 = new Produto();
// $p2->nome = 'Calça Jeans';
// $p2->valor = -100;

var_dump($p1);
// var_dump($p2);