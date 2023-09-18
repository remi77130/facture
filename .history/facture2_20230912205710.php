<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
</head>
<body>
    <h1>Tableau d'informations clients</h1>

    <script>
        import { jsPDF } from "jspdf";

// Default export is a4 paper, portrait, using millimeters for units
const doc = new jsPDF();

doc.text("Hello world!", 10, 10);
doc.save("a4.pdf");
    </script>

</body>
</html>
