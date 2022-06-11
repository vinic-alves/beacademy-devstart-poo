<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, toalhas de rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');


var_dump($c1);
var_dump($c2);



$p1 = new Produto('Tenis', 299, $c3);
$p1->setDescricao('Tenis para corrida profissional');
// $p1->setNome('Tenis para corrida');
// $p1->setValor(299);

$p2 = new Produto('Saia Jeans', 100, $c1);
// $p2->setCategoria($c2);  não vai funcionar pq categoria é apenas para leitura.
// $p2->nome = 'Calça Jeans';
// $p2->valor = -100;

$p3 = new Produto('Calça Branca', 159.78, $c1);
// $p3->setNome('Calça Branca');

