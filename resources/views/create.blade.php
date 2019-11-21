@extends('base')
@section('title')
    @parent
@endsection
@section('main')
    <div class="container">
            <form action="{{route('newPatient')}}" method="post">
                @csrf
                ID :
                <input class="form-control" type="text" name="ID" value=""><br><hr>
                SV.NR :
                <input class="form-control" type="text" name="svnr" value=""><br><hr>
                First Name :
                <input class="form-control" type="text" name="firstname" value=""><br><hr>
                Last Name :
                <input class="form-control" type="text" name="lastname" value=""><br><hr>
                email :
                <input class="form-control" type="text" name="email" value="" ><br><hr>
                Address :
                <input class="form-control" type="text" name="address"  value=""><br><hr>
                Plz :
                <input class="form-control" type="text"  name="plz"  value=""><br><hr>
                Ort :
                <input class="form-control" type="text" name="city"  value=""><br><hr>
                Land :
                <input class="form-control" type="text"  name="country"  value=""><br><hr>
                <div class="card-body">
                    <button class="btn btn-info" type="submit">Add New </button>
                </div>
            </form>
@endsection
