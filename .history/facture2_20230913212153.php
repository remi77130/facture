<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
</head>
<body>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, provident perferendis. Adipisci beatae libero nihil eaque a nobis nulla pariatur itaque sunt, magni unde vitae corporis deleniti officia molestias nemo! </p>
    <button onclick="createPDF()">Create PDF</button>

</body>
<script> 
    function createPDF(){
        import { jsPDF } from "jspdf";

        // Default export is a4 paper, portrait, using millimeters for units
        const doc = new jsPDF();
        var html = document.getElementById("p").innerHTML;

        doc.text(html, 10, 10);
        doc.save("a4.pdf");
    }
</script>
</html>