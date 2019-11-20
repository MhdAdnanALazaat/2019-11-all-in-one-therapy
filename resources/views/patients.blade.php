@extends('backend')

@section('title')Patient &ndash;
@parent
@endsection
@section('main')
    <div class="container">
        <form action="{{route('patients')}}", method="post">
            @csrf
            <div class="input-group">
            <input  class="form-control"  name="firstname" placeholder="firstname">
            <button class="btn btn-info" type="submit">suchen</button>
                <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </form>
    <table  class="table table-bordered table-dark">
        <tr>
            <th> @sortablelink('id')</th>
            <th>@sortablelink('firstname')</th>
            <th>@sortablelink('lastname')</th>
            <th>@sortablelink('svnr')</th>
            <th>@sortablelink('email')</th>
            <th scope="col">@sortablelink('Address')</th>
            <th scope="col">@sortablelink('Plz')</th>
            <th scope="col">@sortablelink('Ort')</th>
            <th scope="col">@sortablelink('Land')</th>
            <th>view info</th>
        </tr>
        @if($patients->count())
        @foreach($patients as $key =>  $patient)
            <tbody>
    <tr>
        <td>{{ $patient->id }}</td>
        <td>{{ $patient->firstname }}</td>
        <td>{{ $patient->lastname }}</td>
        <td>{{ $patient->svnr }}</td>
        <td>{{ $patient->email }}</td>
        <td>{{ $patient->address }}</td>
        <td>{{ $patient->plz }}</td>
        <td>{{ $patient->city }}</td>
        <td>{{ $patient->country }}</td>
    <td><a href="patients/{{$patient->id}}">view info</a> </td>
    </tr>



    @endforeach

    {!! $patients->appends(\Request::except('page'))->render()->render()!!}

    @endif
            </tbody>

    </table>

@endsection
