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

    <input type="text" id="client-nom">
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

    
    
        var nomClient = document.getElementById("nom").value;
    var prenomClient = document.getElementById("prenom").value;
    var adresseClient = document.getElementById("adresse").value;
    var telephoneClient = document.getElementById("telephone").value;
    var emailClient = document.getElementById("email").value;

    var nomEntreprise = document.getElementById("nom-entreprise").value;
    var adresseEntreprise = document.getElementById("adresse-entreprise").value;

    // Remplir les divs avec les informations récupérées
    document.getElementById("client-nom").textContent = nomClient;
    document.getElementById("client-prenom").textContent = prenomClient;
    document.getElementById("client-adresse").textContent = adresseClient;
    document.getElementById("client-telephone").textContent = telephoneClient;
    document.getElementById("client-email").textContent = emailClient;

    document.getElementById("entreprise-nom").textContent = nomEntreprise;
    document.getElementById("entreprise-adresse").textContent = adresseEntreprise;

    // Créer un nouveau document PDF
    var doc = new jsPDF();
    
    // Convertir les divs en PDF
    doc.fromHTML(document.getElementById("client-info"), 10, 10);
    doc.fromHTML(document.getElementById("entreprise-info"), 140, 10);


    


    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");
}
    </script>





</body>
</html>
