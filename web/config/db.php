<?php

class Database
{
    public static function connect()
    {
        $db = new mysqli('localhost', 'root', '', 'kraxx181818');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
