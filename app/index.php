<?php

use framework\Database\Database;

require 'config.php';

require 'app/helpers.php';


$database = new Database($config);
$tasks = $database->selectAll('tasks');


$greeting = greet();



