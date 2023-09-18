<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>



    <title>Tableau d'informations clients</title>

</head>
<body>



    <div class="header">


       <form id="client-form">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" required><br>

        <label for="prenom">Prenom</label>
        <input type="prenom" id="prenom" required><br>

        <label for="adresse">Adresse</label>
        <input type="adresse" id="adresse" required><br>
        
        <label for="code_postal">Code postal</label>
        <input type="phone" id="code_postal" required><br>
        

        <label for="ville">Ville</label>
        <input type="text" id="ville" required><br>



        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" required><br>
        
      





        <button type="button" onclick="ajouterClient()">Ajouter Client</button>
    </form>



<!-------    TABLEAU ENTREPRISE ------>

    
<form id="entreprise-form">


    <label for="nom-entreprise">Nom de l'entreprise :</label>
    <input type="text" id="nom-entreprise" required><br>

    <label for="adresse-entreprise">Adresse de l'entreprise :</label>
    <input style="background-color: #007bff;" type="text" id="adresse-entreprise" required><br>

    <!-- Ajoutez d'autres champs pour les informations de l'entreprise selon vos besoins -->


</form>


</div>


<!-------    TABLEAU ENTREPRISE ------>



    <script>
        function ajouterClient() {
            const doc = new jsPDF();



    
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var adresse = document.getElementById("adresse").value;
    var code_postal = document.getElementById("code_postal").value;
    var ville = document.getElementById("ville").value;


    var email = document.getElementById("email").value;


    var nomEntreprise = document.getElementById("nom-entreprise").value;
    var adresseEntreprise = document.getElementById("adresse-entreprise").value;
    
    // Default export is a4 paper, portrait, using millimeters for units

    // Ajouter les informations du client au PDF

    doc.setFontSize(10);
    doc.text(nom, 150, 8);
    doc.text(prenom, 150, 13);
    doc.text(adresse, 150, 18);
    doc.text(code_postal, 150, 23);
    doc.text(ville, 150, 28);
    doc.text(email, 150, 33);


    doc.rect(2, 2, 60, 30); // x, y, largeur, hauteur border 'top left'


    // Mise en page : Informations de l'entreprise en haut à gauche
    doc.text(nomEntreprise, 4, 8);
    doc.text(adresseEntreprise, 4, 13);

    doc.rect(148, 2, 60, 40); // x, y, largeur, hauteur border 'top right'


    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");}
    </script>





</body>
</html>
