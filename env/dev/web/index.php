<?php

define('PL_DEV', true);

require_once '../vendor/autoload.php';
require_once '../vendor/webkadiz/php-lite/framework/bootstrap.php';

(new pl\core\App())->run();