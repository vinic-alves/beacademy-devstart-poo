<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUs.php';

$cpf = "12345678911";
$docX ="12345678911114";

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUs();
$us->validarDocumento($docX);

echo 'Funcionou';