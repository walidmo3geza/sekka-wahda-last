@extends('parent')
@section('main')
    <div class="container" style="background-color: #DDD;">
        <br />
        <h3>ID - {{ $data->ID }}</h3>
        <h3>FromCity - {{ $data->FromCity }} </h3>
        <h3>ToCity - {{ $data->ToCity }}</h3>
        <h3>PlaceToMeet - {{ $data->PlaceToMeet }} </h3>
        <h3>DateOfTrip - {{ $data->DateOfTrip }}</h3>
        <h3>TimeOfTrip - {{ $data->TimeOfTrip }} </h3>
        <ul><h3>Driver Details</h3>
            <li><h5>ID - {{ $data->driver->UserID }}</h5></li>
            <li><h5>UserName - {{ $data->driver->UserName }}</h5> </li>
            <li><h5>Email - {{ $data->driver->UserEmailID }}</h5></li>
            <li><h5>SSN - {{ $data->driver->SSN }} </h5></li>
            <li><h5>Name - {{ $data->driver->FullName }}</h5></li>
            <li><h5>Phone Number - {{ $data->driver->PhoneNumber }}</h5> </li>
            <li><h5>Total Rate - {{ $data->driver->DriverTotalRate }}</h5> </li>
        </ul>
    </div>
@endsection
