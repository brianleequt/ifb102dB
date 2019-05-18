#!/usr/share/php
<?php
$output=shell_exec('python /var/www/html/python/temp.py');
echo $output;
?>


<?php
$output=shell_exec('python /var/www/html/python/temp.py');
print $output;
?>
