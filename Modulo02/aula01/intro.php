<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno();             //instanciando
$a1 ->nome = "Vinicius";
$a1->cpf = '123.123.123-23';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introducao ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o básico ao intermediario de PHP';


echo "<h1>Aluno: {$a1->nome} </h1>";