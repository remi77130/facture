<?php
$sum =  rand() + rand();
?>
<!DOCTYPE>
<html>
    <head>
    <link href="./facture.css" type="text/css" rel="stylesheet">
</head>
<body>


<?php


foreach($_POST as $key => $value) {
    echo '<b>'.$key.':</b> '.$value.'<br>';
    
}


?>



<img class="img_facture"  src="../img_01.jpg">





</body>
</html>

