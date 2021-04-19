<?php

use Ilab\Util\Config;
use League\Flysystem\Filesystem;
use League\Flysystem\Local\LocalFilesystemAdapter;

/**
 * @param int $type
 * @param string $path
 * @return Filesystem
 */
function fileSystem($type = LOCK_EX, $path = './'): Filesystem
{
    $adapter = new LocalFilesystemAdapter($path, null, $type);
    return new Filesystem($adapter);
}

/**
 * @return bool
 */
function checkProd(): bool
{
    return Config::get('main.mode') == 'prod';
}