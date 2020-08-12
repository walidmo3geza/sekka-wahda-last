@extends('parent')
@section('main')
    <div class="container" style="background-color: #DDD;">
        <br />
        <h3>ID - {{ $data->UserID }}</h3>
        <h3>UserName - {{ $data->UserName }} </h3>
        <h3>Email - {{ $data->UserEmailID }}</h3>
        <h3>SSN - {{ $data->SSN }} </h3>
        <h3>Name - {{ $data->FullName }}</h3>
        <h3>Phone Number - {{ $data->PhoneNumber }} </h3>
        <h3>Total Rate - {{ $data->DriverTotalRate }} </h3>
    </div>
@endsection
