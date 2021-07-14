<!DOCTYPE html>
<html>
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


      <table border="1">
        <thead>
          <tr>
            <th> ID </th>
            <th> Event Name </th>
            <th> Description </th>
            <th> Location </th>
            <th> Event Type </th>
            <th> Start Time </th>
            <th> End Time </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($events as $event)
            <tr>
              <td> {{$event->id}} </td>
              <td> {{$event->event_name}} </td>
              <td> {{$event->description}} </td>
              <td> {{$event->location}} </td>
              <td> {{$event->event_type}} </td>
              <td> {{$event->start_time}} </td>
              <td> {{$event->end_time}} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </body>
</html>
