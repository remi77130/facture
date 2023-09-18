<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<link rel="stylesheet" href="facture.css">


    <title>Tableau d'informations clients</title>

</head>
<body>
  
<div class="my-div">Texte dans ma div avec style modifié</div>
    <button id="exportButton">Exporter en PDF</button>

    <script>
        document.getElementById('exportButton').addEventListener('click', () => {
            // Créez un nouveau document PDF
            const doc = new jsPDF();

            // Capturez le contenu de la div dans une variable
            const content = document.querySelector('.my-div').innerHTML;

   

    <script>
        function ajouterClient() {
        const doc = new jsPDF();

    
    doc.save("facture.pdf");
}
    </script>





</body>
</html>
