<!DOCTYPE html>
<html>
<head>



    
    <title>Tableau d'informations clients</title>
 
</head>
<body>
    <h1>Tableau d'informations clients</h1>


<button>
    generate pdf
</button>

<script>
    const pdf = new jsPDF();
    pdf.text('this is my firt line pdf', 10, 10);
    pdf.save('a4.pdf')

</script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" 
integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>




 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>











</body>



</html>
