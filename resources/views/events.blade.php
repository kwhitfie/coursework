@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aston Events</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>

<body>

@section('content')
	<section id="event-form">


		<!-- display the errors -->
		@if ($errors->any())
		<div class="alert alert-danger">
		<ul> @foreach ($errors->all() as $error)
		<li>{{ $error }}</li> @endforeach
		</ul>
		</div><br /> @endif

		<!-- display the success status -->
		@if (\Session::has('success'))
		<div class="alert alert-success">
		<p>{{ \Session::get('success') }}</p>
		</div><br /> @endif
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
		<form id="event-creation" method="POST" action="{{ url('events') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-header"> Event details </div>
			<div class="card-body">
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Event name: </label>
			<input type="text" name="name" placeholder="Event Name" required  />
		</div>
		<div class="form-group row">
			<label for="description" class="col-md-4 col-form-label text-md-right">Description: </label>
			<input type="text" name="description" placeholder="Description" required  />
		</div>
		<div class="form-group row">
			<label for="location" class="col-md-4 col-form-label text-md-right">Location: </label>
			<input type="text" name="location" placeholder="Location" required  />
			<br><br>
		</div>
		<div class="form-group row">
			<label for="file" class="col-md-4 col-form-label text-md-right">Choose an image for your event: </label>
			<input type="file" name="image" placeholder="Image" accept="image/*" required  />
		</div>
		<div class="form-group row">
			<label for="type" class="col-md-4 col-form-label text-md-right">Choose an event type: </label>
				<select name="type" id="event-type">
					<option value="sport">Sport</option>
					<option value="culture">Culture</option>
					<option value="others">Others</option>
				</select>
		</div>
		<div class="form-group row">
			<label for="start_time" class="col-md-4 col-form-label text-md-right">Start time: </label>
			<input type="datetime-local" name="start_time" placeholder="Date" required  />
		</div>
		<div class="form-group row">
			<label for="end_time" class="col-md-4 col-form-label text-md-right">End time: </label>
			<input type="datetime-local" name="end_time" placeholder="Date" required  />
		</div>

		<div class="form-group row mb-0">
				<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-primary">
							{{ __('Create Event') }}
					</button>
						</div>
				</div>
	</div>
	</form>
</div>
</div>
</div>
</div>
	</section>
@endsection

</body>
