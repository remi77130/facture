<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PDF</title>
    <!-- Assurez-vous que vos styles CSS sont définis ici -->
</head>
<body>
    <!-- Votre formulaire HTML ici -->

    <button id="exportButton">Exporter en PDF</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.0/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('exportButton').addEventListener('click', () => {
            const element = document.getElementById('votre-formulaire-id'); // Remplacez par l'ID de votre formulaire
            const options = {
                margin: 10, // Marge autour du contenu
                filename: 'formulaire.pdf', // Nom du fichier PDF
                image: { type: 'jpeg', quality: 0.98 }, // Type et qualité de l'image
                html2canvas: { scale: 2 }, // Échelle de conversion HTML en image
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' } // Format PDF et orientation
            };

            html2pdf().from(element).set(options).outputPdf(pdf => {
                const blob = new Blob([pdf], { type: 'application/pdf' });
                const url = URL.createObjectURL(blob);

                // Créer un lien de téléchargement
                const a = document.createElement('a');
                a.href = url;
                a.download = 'formulaire.pdf';
                a.click();

                URL.revokeObjectURL(url);
            });
        });
    </script>
</body>
</html>
