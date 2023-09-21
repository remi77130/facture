<?php
$sum =  rand() + rand();
?>
<!DOCTYPE>
<html>
    <head>

    <link href="./facture.css" type="text/css" rel="stylesheet">


    
</head>
<body>


<h1>Le résultat de mon addition est: <?= $sum; ?></h1>

<table border="1">

<tr>

<td>Nom</td>
<td><?= $_POST['client_nom']; ?></td>
<td><?= $_POST['client_ville']; ?></td>
</tr>
</table>


</body>
</html>

