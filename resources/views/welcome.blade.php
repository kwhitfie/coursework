<!DOCTYPE html>
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
		<section id="call-to-action">
			<h2>A new way to view and post events within Aston University.</h2>
			<p>
				Sign up today, either as a student or as an event organiser.
			</p>
			<div class="buttonD">
				<a href="/signup" target="_parent"><p id="call-to-action-button"><strong>Sign up</strong></p></a>
			</div>
		</section>
		<section id="more-info">
			<span class="material-icons">today</span>
			<h2>View upcoming events</h2>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</p>

			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat.</p>
			<span class="material-icons">directions_run</span>
			<h2>Become an event organiser and post your own events</h2>
			<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.</p>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</p>
			<span class="material-icons">emoji_emotions</span>
			<h2>Show your interest for events</h2>
			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat.</p>
			<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.</p>

		</section>
		<section id=testimonials>
			<h3>Still not convinced?</h3>
			<div class="grid-container">
			  <div class="grid-item"><strong>"It was alright"</strong> - Kathy, 19</div>
			  <div class="grid-item"><strong>"I fully endorse this product"</strong> - The Queen</div>
			  <div class="grid-item"><strong>"Cured all my diseases!"</strong> - Ben, 20</div>
			  <div class="grid-item"><strong>"So quick and easy"</strong> - Anonymous</div>
			  <div class="grid-item"><strong>"My wife left me because she said I loved Aston events more than her"</strong> - Dave, 38</div>
			  <div class="grid-item"><strong>"The events was great but the website design was even better"</strong> - Hugh, 18</div>
			  <div class="grid-item"><strong>"Helped me meet so many new people!"</strong> - Anne, 23</div>
			  <div class="grid-item"><strong>"I refuse to comment until my lawyer is here"</strong> - Crook, 25</div>
			  <div class="grid-item"><strong>"Very easy to make an event, would recommend."</strong> - My Mum, 50</div>
			</div>
			</section>

			<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		      rel="stylesheet">

</body>
</html>
