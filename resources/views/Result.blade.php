@extends('backend')

@section('title')Patient &ndash;
@parent
@endsection
@section('main')

    <div><span>Searched for service: {{ $firstname }}</span></div>
    <div><span>Searched for city: {{ $email }}</span></div>
@endsection
