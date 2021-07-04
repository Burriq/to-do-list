<?php

use RedUNIT\Blackhole\Debug;

define("ROOT" , dirname(__DIR__));
require_once dirname(__DIR__) . '\vendor\burriq\framework-core\Init.php';
require_once CONF. '\function.php';
require_once CONF. '\routes.php';

new \core\App();
