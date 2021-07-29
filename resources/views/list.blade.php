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
        <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>


@section('content')

      <table border="1"  class="sortable table">
        <thead>
          <div class="text-center"><h1> All Events </h1></div>
          <tr>
            <th> ID </th>
            <th> Event Name </th>
            <th> Description </th>
            <th> Location </th>
            <th> Event Type </th>
            <th> Start Time </th>
            <th> End Time </th>
            <th> Interest </th>
            <th> Details </th>
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
              <td> {{$event->interest}} </td>
              <td><a href="{{action('App\Http\Controllers\EventController@show', $event['id'])}}" role="button" class="btn btn- primary">Details</a></td>
            </tr>
            @endforeach

          </tbody>
        </table>

        @if(Auth::check() && Auth::user()->account_type == 1)
        <table border="1"  class="sortable table">
          <thead>
            <tr>
              <div class="text-center"><h1> Events created by you </h1></div>
              <th> ID </th>
              <th> Event Name </th>
              <th> Description </th>
              <th> Location </th>
              <th> Event Type </th>
              <th> Start Time </th>
              <th> End Time </th>
              <th> Interest </th>
              <th> Details </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $event)
            @if($event->userid == Auth::user()->id)
              <tr>
                <td> {{$event->id}} </td>
                <td> {{$event->name}} </td>
                <td> {{$event->description}} </td>
                <td> {{$event->location}} </td>
                <td> {{$event->type}} </td>
                <td> {{$event->start_time}} </td>
                <td> {{$event->end_time}} </td>
                <td> {{$event->interest}} </td>
                <td><a href="{{action('App\Http\Controllers\EventController@show', $event['id'])}}" role="button" class="btn btn- primary">Details</a></td>
              </tr>
            @endif
              @endforeach
              @endif

            </tbody>
          </table>



    </body>

@endsection
</html>
