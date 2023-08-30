<?php

require_once __DIR__ . '/src/vendor/autoload.php';

use App\Router;

Router::handle('GET', '/auth/login/', './views/main.php');
