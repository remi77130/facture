<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.9/jspdf.plugin.autotable.js"></script>



    <title>Tableau d'informations clients</title>

</head>
<body>



    <div class="header">


       <form id="client-form">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" required><br>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" required><br>

        <button type="button" onclick="ajouterClient()">Ajouter Client</button>
    </form>

    <script>
        document.getElementById('ajouterClient').addEventListener('click', () => {
            const doc = new jsPDF();

            // Définir les options du PDF
            const options = {
                margin: { top: 20, right: 20, bottom: 20, left: 20 }, // Marge autour du contenu
                format: 'a4' // Format du PDF (par défaut : 'a4')
            };

            // Ajouter le contenu de votre formulaire au PDF
            doc.autoTableHtmlToJson(document.getElementById('votre-formulaire-id'), true);
            doc.autoTable(doc.autoTableHtmlToJson(document.getElementById('votre-formulaire-id')), options);

            // Enregistrez le PDF
            doc.save('formulaire.pdf');
        });
        </script>


</body>
</html>
