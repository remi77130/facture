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





<?php


foreach($_POST as $key => $value) {
    echo $value.'<br>';
    
}


?>







</body>
</html>

