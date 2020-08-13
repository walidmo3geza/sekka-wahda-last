@extends('parent')

@section('main')
    @if($message = \Illuminate\Support\Facades\Session::get('failed'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <h1>Wellcome to you Mr\ <strong>{{ $user->name }}</strong></h1>
    <div style="padding: 50px;">
        <h2>What are you able to do!</h2>
        <ul>
            @if($user->adminCreation)
                <li><h3>Controlling Admins.</h3></li>
            @endif
            @if($user->reservation)
                <li><h3>Reservation Handling.</h3></li>
            @endif
        </ul>

    </div>
    <div style="padding: 20px 50px 50px 50px;">
        <h3>What are you unable to do!</h3>
        <ul>
            @if(! $user->adminCreation)
                <li><h3>Controlling Admins.</h3></li>
            @endif
            @if(! $user->reservation)
                <li><h3>Reservation Handling.</h3></li>
            @endif
        </ul>
    </div>
@endsection
