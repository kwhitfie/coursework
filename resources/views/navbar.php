<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aston Events</title>
</head>
<body>
		<header>
			<h1><a href="/">Aston Events</a></h1>
      <a href="/list" target="_parent"><p id="events-button"><strong>Events</strong></p></a>
			<a href="/create-event" target="_parent"><p id="create-event-button"><strong>Create Event</strong></p></a>
			<form id="login">
				<input type="email" name="email" placeholder="Email" pattern=".+(\.ac\.uk|\.edu)" title="Please enter a UK or US academic email address" required />
				<input type="password" name="password" placeholder="Password" required />
				<input type="submit" value="Login" />
			</form>
		</header>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    <style>
    	<?php
        if(!defined('CSS_PATH')){
          define('CSS_PATH', dirname(__DIR__,3)."/resources/css/style.css");
        }
        	include(CSS_PATH);
      ?>
    </style>

</body>
</html>
