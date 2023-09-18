<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export PDF</title>
    <style>
        .my-div {
            background-color: lightblue;
            padding: 10px;
            font-size: 16px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="my-div">Texte dans ma div avec style modifié</div>
    <button id="exportButton">Exporter en PDF</button>

    <script>
        document.getElementById('exportButton').addEventListener('click', () => {
            // Créez un nouveau document PDF
            const doc = new jsPDF();

            // Capturez le contenu de la div dans une variable
            const content = document.querySelector('.my-div').innerHTML;

            // Ajoutez le contenu à votre document PDF
            doc.fromHTML(content, 15, 15);

            // Enregistrez le PDF
            doc.save('output.pdf');
        });
    </script>
</body>
</html>
