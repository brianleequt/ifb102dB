<!DOCTYPE html>
<head>
    <title>IFB102 dB</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        <?php include 'CSS/main.css'; ?>
        <?php include 'CSS/tables.css'; ?>
    </style>
</head>
<html lang="en">
<?php include 'urlroute.php'; ?>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<?php require 'querydata.php'; ?>
<body>
<div class="flex-center">
    Current CPU Temperature :
    <?php
    $cdata = new TempData();
    $cdata->getTemps();
    $tdata =$cdata->getTemps();
    $mem = memory_get_usage();
    echo $tdata; echo "&emsp; | &emsp;";
    print_mem(); ?>
</div>
<?php
$data = new QueryData();
$data->connect();
$rows = $data->smllOdrRev();
?>
<table id="queries">
    <tr>
            <th>
                Average Yearly Revenue Lost (US Dollars)
            </th>
    </tr>

    <tr>
        <?php foreach ($rows as $row): ?>
        <td><?= $row['avg_yearly'] ?></td>
        <?php endforeach ?>
    </tr>

</table>
</body>
</html>