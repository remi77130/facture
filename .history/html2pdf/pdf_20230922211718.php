<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0,'0','0','0'));

if (!empty($_POST['ville']))
{
    si il existe la ville et qu'elle n'est pas vide, on va la stocké dans une nvariable
}

$html2pdf->writeHTML($html);
$html2pdf->output('Document_pdf.pdf');
?>
