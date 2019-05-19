<!DOCTYPE html>
<style>
    <?php include 'CSS/main.css'; ?>
    <?php include 'CSS/tables.css'; ?>
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
$mem = memory_get_usage();
echo $tdata;
echo "PHP Memory used: ".round((memory_get_usage() - $mem) / 1024 / 1024, 2)."M\n"; ?>
</div>
<table>
    <table id="queries">
        <tr>
            <th>Query</th>
            <th>Purpose</th>
        </tr>
        <tr>
            <td>Minimum Cost Supplier Query</td>
            <td>
                <a href="http://192.168.0.8/result2.php">
                The Minimum Cost Supplier Query finds, in a given region, for each part of a certain type and size, the supplier who
                can supply it at minimum cost. If several suppliers in that region offer the desired part type and size at the same
                (minimum) cost, the query lists the parts from suppliers with the 100 highest account balances. For each supplier,
                the query lists the supplier's account balance, name and nation; the part's number and manufacturer; the supplier's
                address, phone number and comment information.
                </a>
            </td>
    </table>
</table>
<div class="links content">
    <a href="http://192.168.0.8/result.php">Run SQL Query 1</a>
    <a href="http://192.168.0.8/result2.php">Run SQL Query 2</a>
</div>
</body>
</html>