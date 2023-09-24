<?php 
require __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();


ob_start();
include 'facture.php';
$output = ob_get_contents();
ob_end_clean();

// Solution où on dit à Html2Pdf le texte qu'on veut afficher
$html2pdf->writeHTML($output);
$html2pdf->output();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage du Texte</title>
</head>
<body>


    <h1>Contrat de travail généré</h1>

    <div id="contratAffiche">

    <script>
        // Récupérer le texte complet depuis le stockage local
        var contratHTML = localStorage.getItem("contratHTML");

        // Afficher le texte complet en utilisant innerHTML
        var contratAffiche = document.getElementById("contratAffiche");
        contratAffiche.innerHTML = contratHTML;
    </script>



</div>
</body>
</html>
