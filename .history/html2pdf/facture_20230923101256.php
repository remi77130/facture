<!DOCTYPE html>
<html>
<head>
    <title>Création de Contrat de Travail</title>
</head>
<body>
    <h1>Entrez les informations du contrat</h1>








    <form id="contratForm">

 
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" required><br>
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" required><br>

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
        
        <button type="button" onclick="genererContrat()">Générer le contrat</button>
    </form>









    <script>
        function genererContrat() {
            // Récupérer les informations saisies par l'utilisateur
            var prenom = document.getElementById("prenom").value;
            var nom = document.getElementById("nom").value;

            // Autres informations du contrat
            var contratHTML = `
                <h2>Contrat de travail</h2>
                <p>Je soussigné(e) ${prenom} ${nom},</p>
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
