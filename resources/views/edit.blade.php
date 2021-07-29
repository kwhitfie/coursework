@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 ">
      <div class="card">
        <div class="card-header">Edit and update the event</div>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <div class="card-body">
          <form class="form-horizontal" method="POST" action="{{ action('App\Http\Controllers\EventController@update', $event['id']) }} " enctype="multipart/form-data" >
          @method('PATCH')
          @csrf
          <div class="col-md-8">
            <label class="col-md-4 col-form-label text-md-right" >Event Name</label>
            <input type="text" name="name" value="{{$event->name}}"/>
          </div>
          <div class="col-md-8">
            <label class="col-md-4 col-form-label text-md-right" >Description</label>
            <input type="text" name="description" value="{{$event->description}}"/>
          </div>
          <div class="col-md-8">
            <label class="col-md-4 col-form-label text-md-right">Event Type</label>
            <select name="type" value="{{ $event->type}}">
              <option value="Sport">Sport</option>
              <option value="Culture">Culture</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="col-md-8">
            <label class="col-md-4 col-form-label text-md-right" >Start Time</label>
            <input input type="datetime-local" name="start_time" value="{{$event->start_time}}" />
          </div>
        </div>
        <div class="col-md-8">
          <label class="col-md-4 col-form-label text-md-right">End Time</label>
          <input input type="datetime-local" name="end_time" value="{{$event->end_time}}" />
        </div>
          <div class="col-md-8">
            <label class="col-md-4 col-form-label text-md-right">Image</label>
            <input type="file" name="image" />
          </div>
          <div class="row justify-content-center">
            <input type="submit" class="btn btn-primary" />
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection
