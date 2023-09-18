<!DOCTYPE html>
<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

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
            var nom = document.getElementById("nom").value;
            var prenom = document.getElementById("prenom").value;
            var adresse = document.getElementById("adresse").value;
            var telephone = document.getElementById("telephone").value;
            var email = document.getElementById("email").value;

            var table = document.getElementById("client-table");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            cell1.innerHTML = nom;
            cell2.innerHTML = prenom;
            cell3.innerHTML = adresse;
            cell4.innerHTML = telephone;
            cell5.innerHTML = email;

            // Réinitialiser le formulaire
            document.getElementById("nom").value = "";
            document.getElementById("prenom").value = "";
            document.getElementById("adresse").value = "";
            document.getElementById("telephone").value = "";
            document.getElementById("email").value = "";
        }
    </script>
</body>
</html>
