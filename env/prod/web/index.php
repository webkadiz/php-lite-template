<?php

define('PL_DEV', false);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/webkadiz/php-lite/framework/bootstrap.php';

(new pl\core\App())->run();