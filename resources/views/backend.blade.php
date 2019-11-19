@extends('base')

@section('title','Willkommen')

@section('top-links')
    @auth
        <a href="/backend">Patient</a>
        <a href="/backend">kalender</a>
        <a href="/backend">Doku</a>
        <a href="/backend">Frontend</a>


    @endauth
@endsection
@section('main')
   <br>
    Willkomen bei AIOT.
@endsection
