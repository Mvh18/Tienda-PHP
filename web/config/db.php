<?php

class Database
{
    public static function connect()
    {
        $db = new mysqli('docker_db_1', 'root', 'kraxx181818', 'tienda_master', '3306');

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $db->query("SET NAMES 'utf8'");

        return $db;
    }
}
