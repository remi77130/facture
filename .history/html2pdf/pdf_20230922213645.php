<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


if (!empty($_POST['ville']))
{
    $ville = htmlspecialchars($_POST['ville']) ;   //si il existe la ville et qu'elle n'est pas vide, on va la stocké dans une nvariable
    $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0,'0','0','0'));//on declare l'objet

    $html = "

        <page>
        
        <page_header>
        D'ou venez vous ?
        </page_header> <br>

        <draw style="margin: auto; width:150mm; height:100mm; background: #000000; border: solid 0.5mm #777777;">
        <line    style="stroke:#FF0000; stroke-width:1mm" x1="10mm" y1="10mm" x2="140mm" y2="10mm" >
        </draw>

        Je viens de $ville

        <page_footer>
        Ma super ville qui est $ville
        </page_footer>

        </page>
    
    ";

    
$html2pdf->writeHTML($html);
$html2pdf->output('Document_pdf.pdf');
}

?>
