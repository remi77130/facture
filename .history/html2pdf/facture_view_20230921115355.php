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
Votre contrat : 
Votre ligne 
Votre email : 
Vous êtes engagé

<?php foreach($_POST as $key => $value) { // Je demande à afficher les valeurs du form qui se trouve dans facture.php
    echo $value.'<br>';}
    
    
    ?>
    

        </div>

<div>
<!-- Ici placer la div info entreprise -->
</div>       


</div>





</body>
</html>

