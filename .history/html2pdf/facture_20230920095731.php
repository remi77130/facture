<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>



    <div class="header">


       <form id="client-form" action="./generate_pdf.php" method="post">

        <input type="text" name="nom" required><br>

        <input style="width:50%;" type="prenom" name="prenom" required><br>

        <input type="adresse" name="adresse" required><br>
        
        <input type="phone" name="code_postal" required><br>
        

        <label for="ville">Ville</label>
        <input type="text" name="ville" required><br>

        <label for="phone">Tel :</label>
        <input type="number" name="phone" required><br>

        <label for="pays">Pays</label>
        <input type="text" name="pays" required><br>

        <label for="email">Email</label>
        <input type="mail" name="mail" required><br>
    

        <label for="tva">Numéro Tva (option)</label>
        <input type="text" name="tva" ><br>

        <label for="facture_numero">Numéro facture (option)</label>
        <input type="text" name="facture_numero" ><br>
        
        <label for="code_client">Code client (option)</label>
        <input type="text" name="code_client" ><br>
        
      

      



        <button type="submit">Ajouter Client</button>
    </form>



<!-------    TABLEAU ENTREPRISE ------>

    




</form>


</div>

</body>
</html>
