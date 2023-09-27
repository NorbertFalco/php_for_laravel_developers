<?php

namespace framework\Database;

use PDO;

class Connection
{

    public static function make($config)
    {
        try {
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password']);
        } catch (\PDOException $e) {
            echo 'Error de connexió a la base de dades';
        }
    }
}