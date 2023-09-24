<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0,'0','0','0'));

$html = "
<page>

<page_header>
Page Header
</page_header>


<page_footer>
page footer
</page_footer>


</page>



";

$html2pdf->writeHTML($html);
$html2pdf->output('Document_pdf.pdf, D);
?>
