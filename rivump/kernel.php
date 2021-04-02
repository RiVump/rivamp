<?php

use RiVump\Util\Config;
use RiVump\Facade\Debugbar;

/**
 * Composer & Classes autoload
 */
require dirname(__FILE__, 2) . '/vendor/autoload.php';

/**
 * Config autoload
 */
Config::load(glob(__DIR__ . '/config/*.php'));

/**
 * Bitrix init Debugbar
 */
if (Config::get('main.bitrix')) {
    Debugbar::start('debugbar');
}