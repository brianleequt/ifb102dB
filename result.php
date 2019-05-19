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
    echo "PHP Memory used: ".round((memory_get_usage() - $mem) / 1024 / 1024, 2)."M\n"; ?>
</div>
<?php
$data = new QueryData();
$data->connect();
$regions = $data->getAllRegions();
$mem = memory_get_usage();
foreach ($regions as $region) {
    echo "<div class='content'>(Region Name: " .$region['r_name']. ")</div> ";
};
?>
</body>
</html>