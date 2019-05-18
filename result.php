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
<?php
$data = new QueryData();
$data->connect();

$regions = $data->getAllRegions();

foreach ($regions as $region) {
    echo "<div class='content'>(Region Name: " .$region['r_name']. ")</div> ";
};
?>
</body>
</html>