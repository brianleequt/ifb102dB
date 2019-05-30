<!DOCTYPE html>
<style>
    <?php include 'CSS/main.css'; ?>
    <?php include 'CSS/tables.css'; ?>
</style>
<html>
<?php include 'urlroute.php'; ?>
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
$mem = memory_get_usage();
echo $tdata; echo "<br>";
echo "PHP Script Memory usage: ".round((memory_get_usage() - $mem) / 1024 / 1024, 2)."M\n"; ?>
</div>
<table id="queries1">
    <tr>
        <th>Query</th>
        <th>Purpose</th>
    </tr>
    <tr>
        <td>Minimum Cost Supplier Query</td>
        <td>
            <a href="<?=$link?>result2.php">
            The Minimum Cost Supplier Query finds, in a given region, for each part of a certain type and size, the supplier who
            can supply it at minimum cost. If several suppliers in that region offer the desired part type and size at the same
            (minimum) cost, the query lists the parts from suppliers with the 100 highest account balances. For each supplier,
            the query lists the supplier's account balance, name and nation; the part's number and manufacturer; the supplier's
            address, phone number and comment information.
            </a>
        </td>
</table>
</body>
</html>