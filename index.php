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
print_mem(); ?>
</div>
<table id="indextab">
    <tr>
        <th>Query</th>
        <th>Purpose</th>
    </tr>
    <tr>
        <td>Minimum Cost Supplier Query</td>
        <td>
            <a href="<?=$link?>results.php">
            The Minimum Cost Supplier Query finds, in a given region, for each part of a certain type and size, the supplier who
            can supply it at minimum cost. If several suppliers in that region offer the desired part type and size at the same
            (minimum) cost, the query lists the parts from suppliers with the 100 highest account balances. For each supplier,
            the query lists the supplier's account balance, name and nation; the part's number and manufacturer; the supplier's
            address, phone number and comment information.
            </a>
        </td>
</table>
<div class="linksStrong">
    <a href="<?=$link?>resources.php">Resources & Documentation</a>
</div>
</body>
</html>