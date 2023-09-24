<!DOCTYPE html>
<html>
<head>
    <title>Affichage du Texte</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

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
