<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('fr','P','A4');

$_POST = [
    'client_nom' => 'Kévin', 
    'client_ville' => 'Antibes'
];

ob_start();
include 'facture.php';
$output = ob_get_contents();
ob_end_clean();

// Solution où on dit à Html2Pdf le texte qu'on veut afficher
$html2pdf->writeHTML($output);
$html2pdf->output();
?>