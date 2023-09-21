<?php
$sum =  rand() + rand();
?>
<!DOCTYPE>
<html>
    <head>
    <link href="./facture.css" type="text/css" rel="stylesheet">
</head>
<body>


<img src="../img_01.jpg">





<?php


foreach($_POST as $key => $value) {
    echo '<b>'.$key.':</b> '.$value.'<br>';
    
}


?>







</body>
</html>

