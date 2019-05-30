<?php

class QueryData
{

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

    public function minCostSupp()
    {
        $query = $this->connection->prepare("
        SELECT 
            s_acctbal,
            s_name,
            n_name,
            p_partkey,
            p_mfgr,
            s_address,
            s_phone,
            s_comment
        FROM
            part,
            supplier,
            partsupp,
            nation,
            region
        WHERE
            p_partkey = ps_partkey
                AND s_suppkey = ps_suppkey
                AND p_size = 15
                AND p_type LIKE '%BRASS'
                AND s_nationkey = n_nationkey
                AND n_regionkey = r_regionkey
                AND r_name = 'EUROPE'
                AND ps_supplycost = (SELECT 
                    MIN(ps_supplycost)
                FROM
                    partsupp,
                    supplier,
                    nation,
                    region
                WHERE
                    p_partkey = ps_partkey
                        AND s_suppkey = ps_suppkey
                        AND s_nationkey = n_nationkey
                        AND n_regionkey = r_regionkey
                        AND r_name = 'EUROPE')
        ORDER BY s_acctbal DESC , n_name , s_name , p_partkey
        LIMIT 120");

        $query->execute();
        return $query;


    }
}

class TempData
{
    function getTemps()
    {
        $output = shell_exec('python /var/www/html/python/temp.py');
        return $output;
    }

}

function print_mem()
{
    $mem_usage = memory_get_usage();

    echo 'PHP Script memory usage: ' . round($mem_usage / 1024) . 'KB.<br>';
}