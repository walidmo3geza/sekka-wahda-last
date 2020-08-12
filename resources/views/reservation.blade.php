@extends('parent')

@section('main')
    <table class="table table-bordered table-striped">
        <tr>
            <th width="">ID</th>
            <th width="">TravellerId</th>
            <th width="">TripId</th>
            <th width="">Accebted</th>
            <th width="">Actions</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td><a href="travelerDetails/{{ $row->TravellerId }}">{{ $row->TravellerId }}</a> </td>
                <td><a href="tripDetails/{{ $row->TripId }}">{{ $row->TripId }}</a> </td>
                <td>{{ $row->Accebted }}</td>
                <td>
                    <a href="" class="btn btn-primary">Accept</a>
                    <a href="" class="btn btn-danger">Refuse</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
