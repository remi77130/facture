
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
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
