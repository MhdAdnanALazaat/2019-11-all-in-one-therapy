@extends('base')
@section('title')
@parent
@endsection
@section('main')
    <div class="container">
        <div class="card" style="width: 35rem; ">
            <img class="card-img-top" src="https://www.aci.health.nsw.gov.au/networks/icnsw/patients-and-families/?a=278069" alt="Card image cap">


<form action="{{url('patients', [$view->id])}}" method="post">
        @method('PATCH')
        @csrf
    ID :
    <input class="form-control" type="text" name="ID" value="{{$view->id}}"><br><hr>
    SV.NR :
    <input class="form-control" type="text" name="svnr" value="{{$view->svnr}}"><br><hr>
    First Name :
    <input class="form-control" type="text" name="firstname" value="{{$view->firstname}}"><br><hr>
    Last Name :
    <input class="form-control" type="text" name="lastname" value="{{$view->lastname}}"><br><hr>
    email :
    <input class="form-control" type="text" name="email" value="{{$view->email}}" ><br><hr>
    Address :
    <input class="form-control" type="text" name="address"  value="{{$view->address}}"><br><hr>
    Plz :
    <input class="form-control" type="text"  name="plz"  value="{{$view->plz}}"><br><hr>
    Ort :
    <input class="form-control" type="text" name="city"  value="{{$view->city}}"><br><hr>
    Land :
    <input class="form-control" type="text"  name="country"  value="{{$view->country}}"><br><hr>
    <div class="card-body">
            <button class="btn btn-info" type="submit">Update</button>
    </div>

</form>
@endsection
