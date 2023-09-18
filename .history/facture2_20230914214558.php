<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<link rel="stylesheet" href="facture.css">


    <title>Tableau d'informations clients</title>

</head>
<body>

    <div class="header">

<div class="container_client">
    <h1>Tableau d'informations clients</h1>
       <form id="client-form">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" required><br>

 
        <label for="telephone">Numéro de Téléphone :</label>
        <input type="text" id="telephone" required><br>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" required><br>

        <button type="button" onclick="ajouterClient()">Ajouter Client</button>
    </form>

</div>

<!-------    TABLEAU ENTREPRISE ------>

<form id="entreprise-form">

<h2>Infomration entreprise </h2>

    <label for="nom-entreprise">Nom de l'entreprise :</label>
    <input type="text" id="nom-entreprise" required><br>

    <label for="adresse-entreprise">Adresse de l'entreprise :</label>
    <input type="text" id="adresse-entreprise" required><br>

    <!-- Ajoutez d'autres champs pour les informations de l'entreprise selon vos besoins -->


</form>

<!-------    TABLEAU ENTREPRISE ------>

    <script>
        function ajouterClient() {
        const doc = new jsPDF();

    
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var telephone = document.getElementById("telephone").value;
    var email = document.getElementById("email").value;

    var nomEntreprise = document.getElementById("nom-entreprise").value;
    var adresseEntreprise = document.getElementById("adresse-entreprise").value;
   
    // Default export is a4 paper, portrait, using millimeters for units
    
    // Ajouter les informations du client au PDF
  
    doc.setFontSize(10);
    doc.text(nom, 5, 5);
    doc.text(prenom, 5, 10);
    doc.text(telephone, 5, 20);
    doc.text(email, 5, 25);

    // Mise en page : Informations de l'entreprise en haut à droite
    doc.text(nomEntreprise, 200, 5, null, null, "right");
    doc.text(adresseEntreprise, 200, 10, null, null, "right");


    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");}

    </script>





</body>
</html>
