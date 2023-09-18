<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<link rel="stylesheet" href="facture.css">

    <title>Tableau d'informations clients</title>

</head>
<body>
  

<div class="client_info" >

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

    
    doc.save("facture.pdf");
}
    </script>



