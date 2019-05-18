<?php
class QueryData {

    protected $connection = null;

    public function connect()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=tpch", "admin", "omglol19");
    }

    public function getAllRegions()
    {
        $query = $this->connection->prepare("SELECT r_name FROM region");
        $query->execute();

        return $query;
    }

}

class TempData {
    function getTemps()
    {
        $output=shell_exec('python /var/www/html/python/temp.py');
        return $output;
    }

}