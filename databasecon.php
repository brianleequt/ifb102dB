<!DOCTYPE html>
<style>
    <?php include 'CSS/main.css'; ?>
</style>
<html>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<title>IFB102 dB</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<body>
<div class="content">
<?php
$host = 'localhost';
$db   = 'tpch';
$user = 'admin';
$pass = 'omglol19';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$stmt = $pdo->query('SELECT r_name FROM region');
foreach ($stmt as $row)
{
    echo $row['r_name'] . "<br/>";
}

?>
</div>
</body>
</html>
