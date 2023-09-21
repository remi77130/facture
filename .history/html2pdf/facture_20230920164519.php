<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>



    <div class="header_info">

<div>
    
       <form class="client-form" action="./generate_pdf.php" method="post">

        <input type="text" name="numero_contrat_client" placeholder="numero contrat exemple : 1-2LB4ZB" required><br>

        <input type="text" name="numero_ligne" placeholder="numero de ligne" required><br>

        <input type="mail" name="mail" placeholder="Votre Email" required><br>
        
        <label>Vous êtes engagé</label>
       
      

</div>

<div class="info_entreprise">

<input type="text" name="nom_entreprise" placeholder="Nom entreprises" ><br>
<input type="text" name="adresse_entreprise" placeholder="Adresse entreprise" ><br>
<input type="text" name="rue_entreprise" placeholder="Numero rue" ><br>


</div>


        <button type="submit">Ajouter Client</button>
        
    </form>



<!-------    TABLEAU ENTREPRISE ------>

    

</form>


</div>

</body>
</html>
