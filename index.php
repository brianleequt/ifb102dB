<!DOCTYPE html>
<style>
    <?php include 'CSS/main.css'; ?>
</style>
<html>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<?php require 'querydata.php'; ?>
<title>IFB102 dB</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<body>
<div class="flex-center">
    Current CPU Temperature :
<?php
$cdata = new TempData();
$cdata->getTemps();
$tdata =$cdata->getTemps();
echo $tdata;
?>
</div>
<div class="links content">
    <a href="http://192.168.0.8/result.php">Run SQL Query</a>
</div>
</body>
</html>