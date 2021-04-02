<?php

use Ilab\Util\Config;

function fileSystem($type = LOCK_EX, $path = './') {
  $adapter = new League\Flysystem\Local\LocalFilesystemAdapter($path, null, $type);
  $filesystem = new League\Flysystem\Filesystem($adapter);

  return $filesystem;
}

function checkProd() {
	return (Config::get('main.mode') == 'prod') ? true : false;
}