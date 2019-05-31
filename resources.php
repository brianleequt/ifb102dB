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
echo $tdata; echo "<br>";
print_mem();
unset($link)
?>
</div>
<div class="row">
<div class="column">
    <h2 align="center">CPU Temp snippet - Python</h2>
    <p>
        # Import OS and time lib<br>
        import os<br>
        import time<br><br>

        # Define the function to measure CPU temp<br>
        def measure_temp():<br>
        temp = os.popen("vcgencmd measure_temp").readline()<br>
        return (temp.replace("temp=",""))<br><br>

        # Call the function and print the result<br>
        print(measure_temp())<br><br>
    </p>
</div>
<div class="column">
    <h2 align="center">URL Router snippet - PHP</h2>
    <p>
        // Program to display URL of current page.<br>

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')<br>
            $link = "https";<br>
        else<br>
            $link = "http";<br><br>

        // Here append the common URL characters.<br>
        $link .= "://";<br><br>

        // Append the host(domain name, ip) to the URL.<br>
        $link .= $_SERVER['HTTP_HOST'];<br><br>

        // Append the requested resource location to the URL<br>
        $link .= $_SERVER['REQUEST_URI'];<br><br>
    </p>
</div>
</div>

<div class="row">
    <div class="column">
        <h2 align="center">Static files</h2>
            <P align="center">
                <a href="<?php echo $link ?>static/q1.sql">Raw SQL Query 1</a><br>
                <a href="https://gist.githubusercontent.com/brianleequt/2e6f93cabfc090c8b541ef77328aa517/raw/0bcfb41cf377d53dd13c80c4e8d832f9e40934b6/sq1.sql">Query 1 Gist</a><br>
                <a href="<?php echo $link ?>static/q2.sql">Raw SQL Query 2</a><br>
                <a href="https://gist.githubusercontent.com/brianleequt/c4465938c9d733a8b070dfce88f3a4ed/raw/aa721df9c4e23a2d7cca01265059e6878dc08e5e/sq2.sql">Query 2 Gist</a><br>
                <a href="<?php echo $link ?>static/tpc-h.pdf">Database TPC Benchmark™H PDF</a><br>
            </P>
    </div>
    <div class="column">
        <h2 align="center">Admin</h2>
        <P align="center">
            <a href="<?php echo $link ?>phpmyadmin">phpMyAdmin</a><br>
            <a href="<?php echo $link ?>static/phpinfo.php">PHPINFO</a>
        </P>
    </div>
</div>
</body>
</html>