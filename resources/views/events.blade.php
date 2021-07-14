<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aston Events</title>
	<style>
		<?php
			if(!defined('CSS_PATH')){
			define('CSS_PATH', dirname(__DIR__,3)."/resources/css/style.css");
			}
			include(CSS_PATH);
		?>
	</style>
</head>
<body>
	<?php
	define('ROOT_PATH', dirname(__DIR__, 3)."/resources/views/");
		include_once(ROOT_PATH.'navbar.php');
	 ?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">


</body>
</html>
