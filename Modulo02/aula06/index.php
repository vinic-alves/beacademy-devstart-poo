<?php

include 'vendor/autoload.php';

use Dompdf\Dompdf;

$html = '';
for ($n = 0; $n < 10; $n++) {
    $html .= 'Ó o pente! <br>';
}





// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP </h1>'.$html);
// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();


