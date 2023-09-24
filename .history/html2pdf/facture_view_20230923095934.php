<!DOCTYPE html>
<html>
<head>
    <title>Saisie de Texte</title>
</head>
<body>
    <h1>Saisissez votre texte</h1>
    <input type="text" id="phraseInput" placeholder="Écrivez votre texte ici...">
    <button onclick="enregistrerTexte()">Enregistrer</button>

    <script>
        function enregistrerTexte() {
            // Récupérer le texte saisi par l'utilisateur
            var texteUtilisateur = document.getElementById("phraseInput").value;
            
            // Stocker le texte dans le stockage local (LocalStorage)
            localStorage.setItem("texteUtilisateur", texteUtilisateur);

            // Rediriger vers la page d'affichage
            window.location.href = "affichage.html";
        }
    </script>
</body>
</html>
