<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        <?php include 'CSS/main.css'; ?>
        <?php include 'CSS/tables.css'; ?>
    </style>
</head>
<html>
<?php include 'urlroute.php'; ?>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<?php require 'querydata.php'; ?>
<title>IFB102 dB</title>

<body>
<div class="flex-center">
    Current CPU Temperature :
<?php
$cdata = new TempData();
$cdata->getTemps();
$tdata =$cdata->getTemps();
$mem = memory_get_usage();
echo $tdata; echo "<br>";
print_mem();
?>
<div class="column">

</div>

</body>
</html>