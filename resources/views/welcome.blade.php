<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>

<body>

    <div class="container-fluid my-5 pt-5 px-5 bg-primary">
        <div class="row justify-content-center px-4 mx-auto">
            <div class="col-sm-10 col-md-5 col-lg-3 m-1 p-1 justify-center bg-warning">
                @foreach ($videos as $video)
                <x-video url="{{$video->url}}"/>
                <h2>{{$video->title}}</h2>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>