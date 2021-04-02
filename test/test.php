<?php 
require '../rivump/kernel.php';

use RiVump\Facade\Debugbar,
	RiVump\Util\Config;

dump(Config::getAll());	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php Debugbar::start()?>
</head>
<body>
	
<?php 
Debugbar::log('Hello RiVump');

Debugbar::render()?>
</body>
</html>