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
        <rect    style="stroke:#770077; stroke-width:1mm; fill:#008888" x="15%" y="15%"  w="70%" h="70%">
        <ellipse style="stroke:#000077; stroke-width:1mm; fill:#888800" cx="50%" cy="50%" rx="30%" ry="30%">
        <circle  style="stroke:#0000AA; stroke-width:1mm; fill:#AAAA00" cx="50%" cy="50%" r="15%">
    </draw><br>
    <draw style="margin: auto; width:150mm; height:100mm; background: #000000; border: solid 0.5mm #777777;">
        <path style="fill:#AAAA00; stroke:#0000AA; stroke-width:1mm" d="M20mm,10mm H130mm A10mm,10mm 0,0,0 140mm,20mm V80mm A10mm,10mm 0,0,0 130mm,90mm H20mm A10mm,10mm 0,0,0 10mm,80mm V20mm A10mm,10mm 0,0,0 20mm,10mm">
        <path style="fill:#770000; stroke:#AA0033; stroke-width:0.5mm" d="M 20mm,40mm a16mm,8mm 0,0,0 16mm,8mm" />
        <path style="fill:#770000; stroke:#00AA33; stroke-width:0.5mm" d="M 20mm,40mm l16mm,8mm" />
        <path style="fill:#770000; stroke:#AA0033; stroke-width:0.5mm" d="M 40mm,40mm a16mm,8mm 0,0,1 16mm,8mm" />
        <path style="fill:#770000; stroke:#00AA33; stroke-width:0.5mm" d="M 40mm,40mm l16mm,8mm" />
        <path style="fill:#770000; stroke:#AA0033; stroke-width:0.5mm" d="M 80mm,40mm a16mm,8mm 0,1,0 16mm,8mm" />
        <path style="fill:#770000; stroke:#00AA33; stroke-width:0.5mm" d="M 80mm,40mm l16mm,8mm" />
        <path style="fill:#770000; stroke:#AA0033; stroke-width:0.5mm" d="M100mm,40mm a16mm,8mm 0,1,1 16mm,8mm" />
        <path style="fill:#770000; stroke:#00AA33; stroke-width:0.5mm" d="M100mm,40mm l16mm,8mm" />
    </draw><br>

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
