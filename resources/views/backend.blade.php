@extends('base')

@section('title','Willkommen in backend')

@section('top-links')
    @auth
        <a class="text-warning" class="btn btn-primary" href="/backend">Patient</a>
        <a class="text-primary" href="/backend">kalender</a>
        <a class="text-success" href="/backend">Doku</a>
        <a class="text-info" href="/">Frontend</a>


    @endauth
@endsection
@section('main')
   <br>
    Willkomen bei AIOT.
@endsection
