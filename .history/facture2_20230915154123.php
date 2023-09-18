<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.0/html2pdf.bundle.min.js"></script>



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



<!-------    TABLEAU ENTREPRISE ------>

    
<form id="entreprise-form">


    <label for="nom-entreprise">Nom de l'entreprise :</label>
    <input type="text" id="nom-entreprise" required><br>

    <label for="adresse-entreprise">Adresse de l'entreprise :</label>
    <input type="text" id="adresse-entreprise" required><br>

    <!-- Ajoutez d'autres champs pour les informations de l'entreprise selon vos besoins -->


</form>

</div>

<!-------    TABLEAU ENTREPRISE ------>



  <!--  <script>
        function ajouterClient() {
            const doc = new jsPDF();



    
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;

    var nomEntreprise = document.getElementById("nom-entreprise").value;
    var adresseEntreprise = document.getElementById("adresse-entreprise").value;
    
    // Default export is a4 paper, portrait, using millimeters for units

    // Ajouter les informations du client au PDF

    doc.setFontSize(10);
    doc.text(nom, 5, 5);
    doc.text(email, 5, 10);

    // Mise en page : Informations de l'entreprise en haut à droite
    doc.text(nomEntreprise, 200, 5, null, null, "right");
    doc.text(adresseEntreprise, 200, 10, null, null, "right");


    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");}

    </script>
        -->



    <button id="exportButton">Exporter en PDF</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.0/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('exportButton').addEventListener('click', () => {
            const element = document.getElementById('client-form'); // Remplacez par l'ID de votre formulaire
            const options = {
                margin: 10, // Marge autour du contenu
                filename: 'formulaire.pdf', // Nom du fichier PDF
                image: { type: 'jpeg', quality: 0.98 }, // Type et qualité de l'image
                html2canvas: { scale: 2 }, // Échelle de conversion HTML en image
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' } // Format PDF et orientation
            };

            html2pdf().from(element).set(options).outputPdf(pdf => {
                const blob = new Blob([pdf], { type: 'application/pdf' });
                const url = URL.createObjectURL(blob);

                // Créer un lien de téléchargement
                const a = document.createElement('a');
                a.href = url;
                a.download = 'formulaire.pdf';
                a.click();

                URL.revokeObjectURL(url);
            });
        });
    </script>
</body>
</html>
