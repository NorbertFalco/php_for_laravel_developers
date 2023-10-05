<?php

use Framework\App;

require 'vendor/autoload.php';

require 'framework/bootstrap.php';

$routes = require 'routes.php';

// URL
// Router -> api redirect quina url m'ha demenat l'usuari -> he d'obtenir el controlador que que toca i executar-lo


App::get('router')->redirect($_SERVER['REQUEST_URI']);



// require 'app/index.php';
// require 'resources/views/index.blade.php';

