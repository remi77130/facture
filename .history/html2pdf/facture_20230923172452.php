<!DOCTYPE html>
<html>
<head>
    <title>Création de Contrat de Travail</title>
</head>
<body>
  
    <form id="contratForm">


    <h2 class="container_mobile" style="width:600px;border:solid #000000 1px;padding:10px 10px 10px 10px;margin:40px 0px 20px 0px;font-size:15px;font-weight:bold;color:#000000;text-transform:uppercase;text-align:center;float:left;">CONTRAT DE TRAVAIL À DURÉE INDÉTERMINÉE (CDI) À TEMPS <select class="select_lettre temps" onchange="verifier_select_lettre(event, this, 'temps', 'temps');"><option>plein</option><option>partiel</option></select></h2>

 <h2>Contrat de travail à durée 
 <select id="contrat_type" required>
        <option value="determine">détérminé</option>
        <option value="indetermine">indétérminé</option>
</select>
           à temps
<select id="temps_contrat" required>
        <option value="plien">plien</option>
        <option value="partiel">partiel</option>
           
</select><br>

</h2>
       <p>
        
       L'entreprise <input type="text" id="Nom_entreprise" 
       placeholder="Nom de l'entreprise" required>

       dont le siége sociual est situé à <input type="text" id="adresse_entreprise" 
        placeholder="Adresse entreprise" required>, représentée par 

        <select id="civilite" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option> 
            <option value="Mlle">Mlle</option>
        </select>

        <input type="text" id="nom_employeur" placeholder="Nom et preénom employeur">

     
           agissant en qualité d'employeur <br> <br>

           (ci-après désignée "l'Entreprise")



        <!-- Autres informations du contrat -->
</p>
        <button type="button" onclick="genererContrat()">Générer le contrat</button>
    </form>









    <script>
        function genererContrat() {
            // Récupérer les informations entreprise 
            var contrat_type = document.getElementById("contrat_type").value;
            var temps_contrat = document.getElementById("temps_contrat").value
            var Nom_entreprise = document.getElementById("Nom_entreprise").value;
            var adresse_entreprise = document.getElementById("adresse_entreprise").value;
            var civilite = document.getElementById("civilite").value;
            var nom_employeur = document.getElementById("nom_employeur").value;
            


            // Autres informations du contrat
            var contratHTML = `
                <h2>Contrat de travail à durée ${contrat_type} à temps ${temps_contrat}</h2>
                <p>Entre les soussignés : </p>
                <p>L'entreprise ${Nom_entreprise} dont le siège social est situé à 
                ${adresse_entreprise}, représentée par ${civilite} ${nom_employeur}
                
                agissant en qualité d'employeur. <br> <br>

                (ci-après désignée "l'Entreprise")




                <!-- Autres parties du contrat -->
            `;

            // Stocker le contrat HTML dans le stockage local (LocalStorage)
            localStorage.setItem("contratHTML", contratHTML);

            // Rediriger vers la page d'affichage
            window.location.href = "affichage.php";
        }
    </script>
</body>
</html>
