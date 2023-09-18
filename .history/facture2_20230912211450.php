<!DOCTYPE html>
<html>
<head>

<script>
    import jsPDF from 'jspdf';

    // Créer un nouvel objet jsPDF
const doc = new jsPDF();

// Ajouter du texte au document
doc.text('Mon premier document PDF', 10, 10);

// Sauvegarder le document au format PDF
doc.save('mon_document.pdf');


</script>



</body>
</html>
