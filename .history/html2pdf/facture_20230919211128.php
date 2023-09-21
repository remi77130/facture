



<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
</head>
<body>



    <div class="header">


       <form id="client-form" action="./generate_pdf.php">

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
        
      

      



        <button type="button">Ajouter Client</button>
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

</body>
</html>
