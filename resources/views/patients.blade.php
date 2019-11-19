@extends('backend')

@section('title')Patient &ndash;
@parent
@endsection
@section('main')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Svnr</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Plz</th>
            <th scope="col">Ort</th>
            <th scope="col">Land</th>
        </tr>
        </thead>
        @foreach($patients as $patient)
            <tbody>
    <tr>
    <td>{{ $patient->svnr }}</td>
    <td>{{ $patient->lastname }}</td>
    <td>{{ $patient->address }}</td>
    <td>{{ $patient->plz }}</td>
    <td>{{ $patient->city }}</td>
    <td>{{ $patient->country }}</td>
    </tr>

    @endforeach
            </tbody>
    </table>
    <p>{{$patients->links()}}</p>
@endsection
