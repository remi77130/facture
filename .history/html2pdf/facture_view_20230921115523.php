<?php
$sum =  rand() + rand();
?>
<!DOCTYPE>
<html>
    <head>
    <link href="./facture.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="container_img">
<img class="logo_facture" src="../img_01.jpg">

</div>


<div class="container_info">

        <div class="container_info_client">
votre contrat <br>
votre ligne <br>

<?php foreach($_POST as $numero_contrat_client => $value) { // Je demande à afficher les valeurs du form qui se trouve dans facture.php
    echo $value.'<br>';}
    
    
    ?>
    

        </div>

<div>
<!-- Ici placer la div info entreprise -->
</div>       


</div>





</body>
</html>

