<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>
<div id="contratAffiche">
<h1>Saisissez votre texte</h1>
<p>L'entreprise <input type="text" id="phraseInput" placeholder="Écrivez votre texte ici..."> </p>
    <p>L'entreprise <input type="text" id="phraseInput" placeholder="Écrivez votre texte ici..."> </p>



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
