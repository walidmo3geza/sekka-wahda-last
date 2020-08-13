@extends('parent')
@section('main')
    <div align="right">
        <a href="{{ route('admin.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Email</label>
            <div class="col-md-8">
                <input type="text" name="email" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Password</label>
            <div class="col-md-8">
                <input type="text" name="pass" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label for="adminCreation" class="col-md-4 text-right">Admin Controling</label>
            <div class="col-md-8">
                <input type="checkbox" name="adminCreation" id="adminCreation" value="1">
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label for="reservation" class="col-md-4 text-right">Reservation Handiling</label>
            <div class="col-md-8">
                <input type="checkbox" name="reservation" id="reservation" value="1">
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>

    </form>

@endsection
