@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @guest
                    {{ __('You are not logged in. Please login or register.') }}
                    @else
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @endguest
                </div>
                </div>
                <br></br>
                @if(Auth::check() && Auth::user()->account_type == 0)
                <div class="card">
                <div class="card-header">{{ __('Become an organiser') }}</div>
                <div class="card-body text-center">
                  {{ __('Click below to register to become an event organiser') }}
                  <br></br>
                  <a role="button" class="btn btn-info" href="{{action('App\Http\Controllers\EventController@becomeOrganiser')}}">{{ __('Submit') }}</a>
                </div>
              </div>
                @endif


        </div>
    </div>
</div>
@endsection
