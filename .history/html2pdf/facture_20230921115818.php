<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>

<?php foreach($_POST as $key => $value) { // Je demande à afficher les valeurs du form qui se trouve dans facture.php
    echo $value.'<br>';}
    
    
    ?>
    

    <div class="header_info">

<div>
    
       <form class="client-form" action="./generate_pdf.php" method="post">

      <input type="text" name="numero_contrat_client" placeholder=" contrat exemple : 1-2LB4ZB" required><br>

        <input type="text" name="numero_ligne" placeholder="numero de ligne" required><br>

        <input type="mail" name="mail" placeholder="Votre Email" required><br>
        
      
       
      

</div>

<!--<div class="info_entreprise"> Ici la deuxieme div info entreprise

<input type="text" name="nom_entreprise" placeholder="Nom entreprises" ><br>
<input type="text" name="adresse_entreprise" placeholder="Adresse entreprise" ><br>
<input type="text" name="rue_entreprise" placeholder="Numero rue" ><br>


</div>-->


        <button type="submit">Ajouter Client</button>
        
    </form>



<!-------    TABLEAU ENTREPRISE ------>

    

</form>


</div>

</body>
</html>
