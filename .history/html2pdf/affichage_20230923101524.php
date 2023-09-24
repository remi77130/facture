<!DOCTYPE html>
<html>
<head>
    <title>Affichage du Texte</title>
</head>
<body>
    <h1>Contrat de travail généré</h1>

    <div id="contratAffiche">

    <script>
        // Récupérer le texte complet depuis le stockage local
        var contratHTML = localStorage.getItem("contratHTML");

        // Afficher le texte complet en utilisant innerHTML
        var contratAffiche = document.getElementById("contratAffiche");
        contratAffiche.innerHTML = contratHTML;
    </script>



</div>
</body>
</html>
