<?php
    if (isset($_POST['button']))
    {
         echo shell_exec("python3 /var/www/html/py/monitor-temp.py 2>&1");
    }
?>
<html>

<body>
<center>


    <form method="post">
    <table>
        <tr>
            <td>
                Enter CSV file path:
            </td>
            <td>
                <input type="text" name="path">
            </td>
        </tr>
    </table>
    <p>
        <button name="button">Identify Anomalies</button>
    </p>
    </form>
    </center>
</body>
