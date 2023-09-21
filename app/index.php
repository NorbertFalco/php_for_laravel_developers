<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

$user = $config['database']['user'];
$pass = $config['database']['password'];
$type = $config['database']['databasename'];
$host = $config['database']['host'];
$name = $config['database']['host'];
$dsn = "$type:host=$host;dbname=$name";



try {
    $dbh = new PDO($dsn, $user, $pass);
}catch (\Exception $e) {
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('Select * FROM tasks;');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();



