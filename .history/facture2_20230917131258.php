

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
        <input style="width:50%;" type="prenom" id="prenom" required><br>

        <label for="adresse">Adresse</label>
        <input type="adresse" id="adresse" required><br>
        
        <label for="code_postal">Code postal</label>
        <input type="phone" id="code_postal" required><br>
        

        <label for="ville">Ville</label>
        <input type="text" id="ville" required><br>

        <label for="phone">Tel :</label>
        <input type="number" id="phone" required><br>

        <label for="pays">Pays</label>
        <input type="text" id="pays" required><br>

        <label for="email">Email</label>
        <input type="mail" id="mail" required><br>
    

        <label for="tva">Numéro Tva (option)</label>
        <input type="text" id="tva" ><br>

        <label for="facture_numero">Numéro facture (option)</label>
        <input type="text" id="facture_numero" ><br>
        
        <label for="code_client">Code client (option)</label>
        <input type="text" id="code_client" ><br>
        
      

      



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



<form>
<h3>Produit achetée</h3>
    <label for="reference-produit">Référence du produit :</label>
    <input type="text" id="reference_produit" required><br>

    <label for="nombre-produits">Nombre de produits :</label>
    <input type="number" id="nombre_produits" required><br>

    <label for="prix-produit">Prix du produit :</label>
    <input type="number" step="0.01" id="prix_produit" required><br>

<form>



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
    var phone = document.getElementById("phone").value;
    var pays = document.getElementById("pays").value;
    var mail = document.getElementById("mail").value;
    var tva = document.getElementById("tva").value;
    var facture_numero = document.getElementById("facture_numero").value;
    var code_client = document.getElementById("code_client").value;





    var nomEntreprise = document.getElementById("nom-entreprise").value;
    var adresseEntreprise = document.getElementById("adresse-entreprise").value;



    var reference_produit = document.getElementById("reference_produit").value;
    var nombre_produits = document.getElementById("nombre_produits").value;
    var prix_produit = document.getElementById("prix_produit").value;




    
    // Default export is a4 paper, portrait, using millimeters for units

    // Ajouter les informations du client au PDF

    doc.setFontSize(10);
    doc.text(nom, 150, 8);
    doc.text(prenom, 150, 13);
    doc.text(adresse, 150, 18);
    doc.text(code_postal, 150, 23);
    doc.text(ville, 150, 28);
    doc.text(phone, 150, 33);
    doc.text(pays, 150, 38);
    doc.text(mail, 150, 43);
    doc.text(tva, 150, 48);
    doc.text(facture_numero, 150, 53);
    doc.text(code_client, 150, 58);


    doc.rect(2, 2, 60, 30); // x, y, largeur, hauteur border 'top left'


    // Mise en page : Informations de l'entreprise en haut à gauche
    doc.text(nomEntreprise, 4, 8);
    doc.text(adresseEntreprise, 4, 13);

    doc.roundedRect(148, 2, 60, 70, 2,2,2,2); // x, y, largeur, hauteur, rayon de coins arrondis

    doc.rect(10, 90, 90, 10); // x, y, largeur, hauteur

    // Dessiner une bordure autour de la référence du produit
    doc.rect(10, 90, 90, 10); // x, y, largeur, hauteur
    doc.text("Référence du produit : " + referenceProduit, 10, 95); // Ajustez la position en conséquence
    
    doc.text("Nombre de produits : " + nombre_produits, 10, 100);
    doc.text("Prix du produit : " + prix_produit, 10, 110);



    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");}
    </script>





</body>
</html>
