<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

$_POST = [
    'client_nom' => 'Kévin', 
    'client_ville' => 'Antibes'
];

ob_start();
include 'facture.php';
$output = ob_get_contents();
ob_end_clean();











exit;

// Solution où on dit à Html2Pdf le texte qu'on veut afficher
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');

$html2pdf->output();
?>