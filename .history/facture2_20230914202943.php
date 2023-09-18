<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<link rel="stylesheet" href="facture.css">


    <title>Tableau d'informations clients</title>

</head>
<body>
  

<div class="client-info" >

<h1>Tableau d'informations clients</h1>
       <form id="client-form">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" required><br>


      

        <button type="button" onclick="ajouterClient()">Ajouter Client</button>
    </form>

</div>
   


<!-------    FORM ENTREPRISE ------>
<div id="entreprise_info">

</div>
<h2>Infomration entreprise </h2>

<form id="entreprise-form">


    <label for="nom-entreprise">Nom de l'entreprise :</label>
    <input type="text" id="nom-entreprise" required><br>

    <label for="adresse-entreprise">Adresse de l'entreprise :</label>
    <input type="text" id="adresse-entreprise" required><br>



</form>



<!-------    FORM ENTREPRISE ------>


   

    <script>
        function ajouterClient() {
        const doc = new jsPDF();

    
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;

    var nomEntreprise = document.getElementById("nom-entreprise").value;
    var adresseEntreprise = document.getElementById("adresse-entreprise").value;

       // doc.text(nomEntreprise, 200, 5, null, null, "right");
       // doc.fromHTML(document.getElementById("client-info"), 10, 10);
  
// Default export is a4 paper, portrait, using millimeters for units
    
    // Ajouter les informations du client au PDF
  
    doc.setFontSize(10);
    doc.text(nom, 5, 5);
    doc.text(prenom, 5, 10);

       // Convertir les divs en PDF
    doc.fromHTML(document.getElementById("client-info"), 10, 10);
    doc.fromHTML(document.getElementById("entreprise-info"), 140, 10);

  // Mise en page : Informations de l'entreprise en haut à droite
   doc.text(nomEntreprise, 200, 5, null, null, "right");
   doc.text(adresseEntreprise, 200, 10, null, null, "right");

    


    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");
}
    </script>





</body>
</html>
