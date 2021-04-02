<?php
/**
 * Composer & Classes autoload
 */
require dirname(__FILE__, 2).'/vendor/autoload.php';

/**
 * Config autoload
 */
\Ilab\Util\Config::load(glob(__DIR__.'/config/*.php'));

/**
 * Bitrix init debugbar
 */
if(\Ilab\Util\Config::get('main.bitrix'))
	\Ilab\Facade\Debugbar::getInstance('debugbar');