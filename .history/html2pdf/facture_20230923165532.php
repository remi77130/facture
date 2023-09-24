<!DOCTYPE html>
<html>
<head>
    <title>Création de Contrat de Travail</title>
</head>
<body>
    <h1>Entrez les informations du contrat</h1>








    <form id="contratForm">


 
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

     
           agissant en qualité d'employeur

          <!-- Champ de sélection pour choisir un nombre entre 1 et 5 -->
          <label for="nombre">Votre age :</label>
        <select id="nombre" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>

        <!-- Autres informations du contrat -->
</p>
        <button type="button" onclick="genererContrat()">Générer le contrat</button>
    </form>









    <script>
        function genererContrat() {
            // Récupérer les informations entreprise 
            var Nom_entreprise = document.getElementById("Nom_entreprise").value;
            var adresse_entreprise = document.getElementById("adresse_entreprise").value;
            var civilite = document.getElementById("civilite").value;
            var nombre = document.getElementById("nombre").value;
            var nom_employeur = document.getElementById("nom_employeur").value;
            


            // Autres informations du contrat
            var contratHTML = `
                <h2>Contrat de travail</h2>
                <p>L'entreprise ${Nom_entreprise} dont le siège social est situé à 
                ${adresse_entreprise}, représentée par ${civilite}  ${nom_employeur}
                
                agissant en qualité d'employeur
                <p>Vous avez :${nombre} ans</p>


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
