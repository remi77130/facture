<?php
$sum =  rand() + rand();
?>
<!DOCTYPE>
<html>
    <head>
    <link href="./facture.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include '../noun-bold-3689118.svg'; ?>
<?php
foreach($_POST as $key => $value) {
    echo '<b>'.$key.':</b> '.$value.'<br>';
}
?>
</body>
</html>

