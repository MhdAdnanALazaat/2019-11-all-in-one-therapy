@extends('base')

@section('title','login')

@section('main')
    {{-- login-formular --}}
<form method="post" action="{{route('authenticate')}}">
    @csrf
    @if( $errors->any() )
        <p class="alert alert-danger">Nice try.</p>
    @endif
    <div class="input-group">
    <p><input class="input-group-text" type="text" name="name" placeholder="Benutzer"></p>
    <p><input class="input-group-text" type="password" name="password" placeholder="Passwort"></p><br>
    <p><button class="btn btn-primary" type="submit">Login</button></p>
    </div>
</form>
@endsection
