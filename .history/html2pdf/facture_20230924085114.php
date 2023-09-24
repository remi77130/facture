<!DOCTYPE html>
<html>
<head>
    <title>Création de Contrat de Travail</title>
</head>
<body>
  
    <form id="contratForm">


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

           (ci-après désignée "l'Entreprise") D'une part, et 
        
           <select id="civilite_salarie" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option> 
            <option value="Mlle">Mlle</option>
        </select> 
        
        <input type="text" id="nom_salarie" placeholder="Nom du salarié">




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
            var civilite_salarie = document.getElementById("civilite_salarie").value;
            var nom_salarie = document.getElementById("nom_salarie").value;

            
            


            // Autres informations du contrat
            var contratHTML = `
                <h2>Contrat de travail à durée ${contrat_type} à temps ${temps_contrat}</h2>
                <p>Entre les soussignés : </p>
                <p>L'entreprise ${Nom_entreprise} dont le siège social est situé à 
                ${adresse_entreprise}, représentée par ${civilite} ${nom_employeur}
                
                agissant en qualité d'employeur. <br> <br>

                (ci-après désignée "l'Entreprise") <br> <br> 
                
                D'une part et ${civilite_salarie} ${nom_salarie}




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
