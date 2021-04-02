# Библиотека Composer для работы с проектами
**Требуется _PHP 7.4_ и выше!**

## Содержание
1. #### [Установка и настройка](#instructions)
2. #### [Мини-инструкции](#mini-instructions)
	- [Работа с composer-ом на хостинге Timeweb](#workwithcomposertimeweb)
	- [Работа с классами](#workwithclasses)
	- [Настройка PHPDebugbar](#debugbarsettings)
3. #### [Документация](#documentation)
	- [Ссылки на документацию к каждому пакету](#packagedoclinks)
4. #### [Пакеты](#packages)
	- [Встроенные пакеты](#reqpackages)
	- [Dev-пакеты](#devpackages)

<a name="instructions"></a> 

# [Установка и настройка](#instructions)

1. Скачайте и установите Composer глобально по [следующей ссылке](https://getcomposer.org/download/) (раздел *Windows Installer*)
2. Откройте терминал в необходимой вам папке и установите проект:
	- Если директория пуста:
		> composer create-project alternativniy/composer-ilab .

	- Если директория имеет файлы:
		1. Выполните команду:
			> composer create-project alternativniy/composer-ilab
		2. Скопируйте файлы с созданной папки **composer-ilab** в свою изначальную директорию
	
	- Если у вас нет своего .gitingore выполните:
		> composer create-project --no-scripts alternativniy/composer-ilab

	- Если	у вас есть уже .gitingore, добавьте в него слудющие исключения:
		> /vendor/ <br />
		> composer.lock
3. Подключите autoload.php в своем проекте:
	> require "{КОРЕНЬ}/vendor/autoload.php"
4. [Настроить PHPDebugbar](#debugbarsettings)

<a name="mini-instructions"></a> 

# [Мини-инструкции](#mini-instructions)

<a name="workwithcomposertimeweb"></a> 

## Работа с composer-ом на хостинге Timeweb
- Необходимо перейти в SSH-консоль и выполнить команду:
	> /opt/php74/bin/php /usr/local/bin/composer {команда}

<a name="workwithclasses"></a> 

## Работа с классами
- Все классы находятся в папке `ilab/classes`
- Все новые классы должны находиться под нэймспейсом `Ilab`
- Создание и написание классов должно соответстововать стандарту `PSR-4`
- После создания нового класса необходимо переиндексировать автолоад командой:
	> composer dump-autoload -o

<a name="debugbarsettings"></a>

## Настройка PHPDebugbar
- Если вы работаете на Битриксе:
	1. В `ilab\config\main.php` в поле `bitrix_users` добавить ID-пользователей для которых будет отображаться PHPDebugbar <br />
	(*Если массив оставить пустым, то PHPDebugbar будет отображаться у всех админов*)
	2. PHPDebugbar автоматически подключится для нужных пользователей

- Если вы работаете на другой платформе:
	1. Необходимо в теге `<head>` вызвать
		```php
		<?php
			use Ilab\Facade\Debugbar;
			Debugbar::start()
		?>
		```
	2. В ***конце*** `<body>` вызвать
		```php
		<?php
			use Ilab\Facade\Debugbar;
			Debugbar::render()
		?>
		```

<a name="documentation"></a> 

# [Документация](#documentation)

<a name="packagedoclinks"></a> 

## Ссылки на документацию к каждому пакету:
- ### [Guzzle](https://docs.guzzlephp.org/en/stable/)
- ### [Laravel Collections](https://docs.rularavel.com/docs/8.x/collections)
- ### [Flysystem](https://flysystem.thephpleague.com/v2/docs/usage/filesystem-api/)
- ### [Monolog](https://github.com/Seldaek/monolog)
- ### [Symphony Cache](https://symfony.com/doc/current/components/cache.html)
- ### [PHP Debugbar](http://phpdebugbar.com/docs/)
- ### [var-dumper](https://symfony.com/doc/current/components/var_dumper/introduction.html)

<a name="packages"></a>

# [Пакеты](#packages)

<a name="reqpackages"></a>

## Встроенные пакеты
- <a href="/packages/guzzlehttp/guzzle">guzzlehttp/guzzle</a>
- <a href="/packages/illuminate/collections">illuminate/collections</a></li>
- <a href="/packages/league/flysystem">league/flysystem</a>
- <a href="/packages/monolog/monolog">monolog/monolog</a>
- <a href="/packages/symfony/cache">symfony/cache</a>

<a name="devpackages"></a>

### Dev-пакеты
- <a href="/packages/maximebf/debugbar">maximebf/debugbar</a>
- <a href="/packages/symfony/var-dumper">symfony/var-dumper</a>
