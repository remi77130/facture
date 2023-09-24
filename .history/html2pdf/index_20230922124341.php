<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0,'0','0','0'));

$html2pdf->writeHTML('<h1>Hello </h1> bienvenue');
$html2pdf->output();
?>
