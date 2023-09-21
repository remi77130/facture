<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>

<p>
L'entreprise <span class="container_contenteditable nom_entreprise" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'nom_entreprise', 'nom_entreprise', 'Nom de l\'entreprise');" title="Nom de l'entreprise" style="color: rgb(255, 0, 0);">Nom de l'entreprise</span> dont le siège social est situé à <span class="container_contenteditable adresse_entreprise" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'adresse_entreprise', 'adresse_entreprise', 'Adresse complète de l\'entreprise');" title="Adresse complète de l'entreprise" style="color: rgb(255, 0, 0);">Adresse complète de l'entreprise</span>, représentée par <select class="select_lettre civilite_employeur" onchange="verifier_select_lettre(event, this, 'civilite_employeur', 'civilite_employeur');"><option>Mr</option><option>Mme</option><option>Mlle</option></select> <span class="container_contenteditable nom_prenom_employeur" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'nom_prenom_employeur', 'nom_prenom_employeur', 'Nom et Prénom de l\'employeur');" title="Nom et Prénom de l'employeur" style="color: rgb(255, 0, 0);">Nom et Prénom de l'employeur</span>, agissant en qualité d'employeur
<br>
<br>(ci-après désignée "l'Entreprise")
</p>

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
