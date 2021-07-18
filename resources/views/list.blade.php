@extends('layouts.app')
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>Aston Events</title>
    </head>
    <body>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

@section('content')

      <table border="1" class="table">
        <thead>
          <tr>
            <th> ID </th>
            <th> Event Name </th>
            <th> Description </th>
            <th> Location </th>
            <th> Event Type </th>
            <th> Start Time </th>
            <th> End Time </th>
            <th> Image </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($events as $event)
            <tr>
              <td> {{$event->id}} </td>
              <td> {{$event->name}} </td>
              <td> {{$event->description}} </td>
              <td> {{$event->location}} </td>
              <td> {{$event->type}} </td>
              <td> {{$event->start_time}} </td>
              <td> {{$event->end_time}} </td>
              <td> {{$event->image}} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </body>

@endsection
</html>
