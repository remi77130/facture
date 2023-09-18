<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<link rel="stylesheet" href="facture.css">


    <title>Tableau d'informations clients</title>

</head>
<body>
  

<div id="client-info">
    <h2>Informations du client :</h2>
    <p><strong>Nom :</strong> <span id="client-nom"></span></p>
    <p><strong>Prénom :</strong> <span id="client-prenom"></span></p>
    <p><strong>Adresse :</strong> <span id="client-adresse"></span></p>
    <p><strong>Numéro de Téléphone :</strong> <span id="client-telephone"></span></p>
    <p><strong>Adresse e-mail :</strong> <span id="client-email"></span></p>
</div>

<div id="entreprise-info">
    <h2>Informations de l'entreprise :</h2>
    <p><strong>Nom de l'entreprise :</strong> <span id="entreprise-nom"></span></p>
    <p><strong>Adresse de l'entreprise :</strong> <span id="entreprise-adresse"></span></p>
    <!-- Ajoutez d'autres champs pour les informations de l'entreprise selon vos besoins -->
</div>




<!-------    TABLEAU ENTREPRISE ------>


   

    <script>
        function ajouterClient() {
        const doc = new jsPDF();

    
    

    


    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");
}
    </script>





</body>
</html>
