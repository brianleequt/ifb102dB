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
    echo $tdata; echo "&emsp; | &emsp;";
    echo "PHP Script Memory usage: ".round((memory_get_usage() - $mem) / 1024 / 1024, 2)."M\n"; ?>
</div>
<?php
$data = new QueryData();
$data->connect();
$rows = $data->minCostSupp();
$colheads = array("Account Balance","Supplier","Nation","Part Key","Manufacturer","Supplier Address","Supplier Phone","Supplier Comment");
$mem = memory_get_usage();
?>
<table id="queries">
    <tr>
        <?php foreach ($colheads as $head): ?>
        <th>
            <?= $head ?>
        </th>
        <?php endforeach ?>
    </tr>
<?php foreach ($rows as $row): ?>
    <tr>
    <td><?= $row['s_acctbal'] ?></td>
    <td><?= $row['s_name'] ?></td>
    <td><?= $row['n_name'] ?></td>
    <td><?= $row['p_partkey'] ?></td>
    <td><?= $row['p_mfgr'] ?></td>
    <td><?= $row['s_address'] ?></td>
    <td><?= $row['s_phone'] ?></td>
    <td><?= $row['s_comment'] ?></td>
    </tr>
<?php endforeach ?>
</table>
</body>
</html>