<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
</head>
<body>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, provident perferendis. Adipisci beatae libero nihil eaque a nobis nulla pariatur itaque sunt, magni unde vitae corporis deleniti officia molestias nemo! </p>
    <button onclick="createPDF()">Create PDF</button>

</body>
<script> 
    function createPDF(){

 

        doc.text(html, 10, 10);
        doc.save("a4.pdf");
    }
</script>
</html>