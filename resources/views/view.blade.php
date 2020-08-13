@extends('parent')

@section('main')

    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('admin.index') }}" class="btn btn-default">Back</a>
        </div>
        <br />
        <h3>Name - {{ $data->name }}</h3>
        <h3>Email - {{ $data->email }} </h3>
        <h3>Admin Controlling - {{ $data->adminCreation }}</h3>
        <h3>Reservation Handling - {{ $data->reservation }}</h3>
    </div>
@endsection
