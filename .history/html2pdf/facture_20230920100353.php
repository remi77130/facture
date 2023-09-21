<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>



    <div class="header">


       <form id="client-form" action="./generate_pdf.php" method="post">

        <input type="text" name="nom" placeholder="Votre Nom" required><br>

        <input type="text" name="prenom" placeholder="Votre Prenom" required><br>

        <input type="adresse" name="adresse" placeholder="Votre Adresse" required><br>
        
        <input type="number" name="code_postal" placeholder="Code Postal" required><br>
        
        <input type="text" name="ville" placeholder="Votre Ville" required><br>

        <input type="number" name="phone" placeholder="Votre Numero" required><br>

        <input type="text" name="pays" placeholder="Votre Pays" required><br>

        <input type="mail" name="mail" placeholder="Votre Email" required><br>
    
        <input type="text" name="tva" placeholder="Votre Code TVA"><br>

        <input type="text" name="facture_numero" plceholder="Numero de Facture"><br>

        <input type="text" name="code_client" placeholder="Code Client" ><br>
        
      

      



        <button type="submit">Ajouter Client</button>
    </form>



<!-------    TABLEAU ENTREPRISE ------>

    




</form>


</div>

</body>
</html>
