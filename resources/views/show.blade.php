@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 ">
      <div class="card">
        <div class="card-header">Event Information</div>
        <div class="card-body">
          <table class="table table-striped" border="1" >
            <tr> <td> <b>Name </th> <td> {{$event->name}}</td></tr>
              <tr> <th>Description </th> <td>{{$event->description}}</td></tr>
              <tr> <th>Location </th> <td>{{$event->location}}</td></tr>
              <tr> <td>Start time </th> <td>{{$event->start_time}}</td></tr>
              <tr> <td>End time </th> <td>{{$event->end_time}}</td></tr>
              <tr> <td>Interest </th> <td>{{$event->interest}}</td></tr>
              <tr> <td colspan='2' ><img style="width:100%;height:100%"
                src="{{ asset('storage/images/'.$event->image)}}"></td></tr>


                <tr> <td> Organiser Name </th> <td> {{$user->name}}</td></tr>
                <tr> <td> Organiser Email </th> <td> {{$user->email}}</td></tr>
              </table>

              <table><tr>
                <div class="text-center">
                <td><a href="/list" class="btn btn-primary" role="button">Back to the list</a></td>


                @if(Auth::check() && Auth::user()->id == $event->userid)

                  <td><a href="{{action('App\Http\Controllers\EventController@edit', $event['id'])}}" role="button"  class="btn btn- warning">Edit</a></td>
                    <td><form action="{{action('App\Http\Controllers\EventController@destroy', $event['id'])}}" method="post">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>

                      </tr>
                    </form>
                  </table>
                  </div>
                  @endif

                  <div class="text-center">
                    <form action="put">
                    <td><a role="button" href="{{action('App\Http\Controllers\EventController@add', $event['id'])}}" class="btn btn-info">Register Interest</a></td>
                  </form>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection
