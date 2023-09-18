<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>


    <title>Tableau d'informations clients</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Tableau d'informations clients</h1>

    <form id="client-form">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" required><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" required><br>

        <label for="telephone">Numéro de Téléphone :</label>
        <input type="text" id="telephone" required><br>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" required><br>

        <button type="button" onclick="ajouterClient()">Ajouter Client</button>
    </form>

    <table id="client-table">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Numéro de Téléphone</th>
            <th>Adresse e-mail</th>
        </tr>
    </table>

    <script>
        function ajouterClient() {
        const doc = new jsPDF();

    
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var adresse = document.getElementById("adresse").value;
    var telephone = document.getElementById("telephone").value;
    var email = document.getElementById("email").value;

    
   
// Default export is a4 paper, portrait, using millimeters for units

    
    // Ajouter les informations du client au PDF
    doc.setFontSize(10);
    doc.text(nom, 5, 5);
    doc.text(prenom, 5, 10);
    doc.text(adresse, 5, 15);
    doc.text(telephone, 5, 20);
    doc.text(email, 5, 25);

    // Ajouter une nouvelle page pour la facture (si nécessaire)
    // doc.addPage();

    // Enregistrer le PDF et proposer le téléchargement
    doc.save("facture.pdf");
}
    </script>


</body>
</html>
