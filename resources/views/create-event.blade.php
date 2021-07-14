<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aston Events</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<style>
		<?php
			if(!defined('CSS_PATH')){
				define('CSS_PATH', dirname(__DIR__,3)."/resources/css/style.css");
			}
			include_once(CSS_PATH);
		?>

		<?php
				$name = $description = $location = "";
				$nameErr = $descriptionErr = $locationErr = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {

				if (empty($_POST["name"])) {
					$nameErr = "Event name is required";
				}
				else {
					$name = test_input($_POST["name"]);
			}

			if (empty($_POST["description"])) {
				$descriptionErr = "Event description is required";
			}
			else {
				$name = test_input($_POST["description"]);
		}

		if (empty($_POST["location"])) {
			$locationErr = "Event location is required";
		}
		else {
			$name = test_input($_POST["location"]);
	}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

		}

			?>

	</style>
</head>

<body>
	<?php
	define('ROOT_PATH', dirname(__DIR__, 3)."/resources/views/");
		include_once(ROOT_PATH.'navbar.php');
	 ?>


	<section id="event-form">
		<h2>Event details</h2>
		<form id="event-creation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			@csrf
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div>
			<input type="text" name="event-name" placeholder="Event Name" value="<?php echo $name;?>" required  />
			<span class="error">* <?php echo $nameErr;?></span>
		</div>
		<div>
			<input type="text" name="event-description" placeholder="Description" value="<?php echo $description;?>" required  />
			<span class="error">* <?php echo $descriptionErr;?></span>
		</div>
		<div>
			<input type="text" name="event-location" placeholder="Location" value="<?php echo $location;?>" required  />
			<span class="error">* <?php echo $locationErr;?></span>
			<br><br>
		</div>
		<div>
			<label for="file">Choose an image for your event: </label>
			<input type="file" name="event-image" placeholder="Image" accept="image/*" required  />
		</div>
		<div>
			<label for="event-type">Choose an event type: </label>
				<select name="event-type" id="event-type">
					<option value="sport">Sport</option>
					<option value="culture">Culture</option>
					<option value="others">Others</option>
				</select>
		</div>
		<div>
			<h2>Start time</h2>
			<input type="datetime-local" name="event-date" placeholder="Date" required  />
		</div>
		<div>
			<h2>End time</h2>
			<input type="datetime-local" name="event-date" placeholder="Date" required  />
		</div>

		<input type="submit" id="submitButton-event" value="Submit" />
	</form>
	</section>

</body>
