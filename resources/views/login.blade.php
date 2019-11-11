<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login &ndash; All-in-one Therapy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Login &ndash; All-in-one Therapy
        </div>

        <form method="post" action="{{ route('authenticate') }}">
            @csrf
            @if ($errors->has('name'))
                <p class="validation-failed">
                    {{ $errors->first('name') }}<br/>
                    <input class="validation-failed" placeholder="Username" type="text" name="name" value="{{ old('name') }}">
                </p>
            @else
                <p>
                    <input placeholder="Username" type="text" name="name">
                </p>
            @endif
            @if ($errors->has('password'))
                <p class="validation-failed">
                    {{ $errors->first('password') }} <br/>
                    <input class="validation-failed" placeholder="Password" type="password" name="password" >
                </p>
            @else
                <p>
                    <input placeholder="Password" type="password" name="password">
                </p>
            @endif
            <p>
                <button type="submit">Login</button>
                <a href="{{ route('/') }}">Cancel</a>
            </p>
        </form>

    </div>
</div>
</body>
</html>
