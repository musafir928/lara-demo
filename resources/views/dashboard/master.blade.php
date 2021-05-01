<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="trumbowyg/dist/ui/trumbowyg.min.css">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @livewireStyles

</head>

<body class="font-sans antialiased bg-light">
    <x-dash-nav></x-dash-nav>

    <div id="admin" class="p-1">
        @if(isset($current))
        <div class="container bg-success admin-banner d-flex justify-content-between align-items-center mb-2 mt-2 border border-3 border-warning">
            <h1 class="text-white">
                {{ucwords($current)}}
            </h1>
            <a href="{{url('/dashboard/'.strtolower($current).'/create')}}" class="btn btn-primary h1 font-weight-bold">add {{$current}}</a>
        </div>
        @endif
        @yield('dash')
        <audio autoplay="true">
            <source src="musics/fur-elise.mp3" type="audio/mpeg">
            Your browser does not support the audio tag.
        </audio>
    </div>

    @yield('custom-script')
    <script src="trumbowyg/dist/trumbowyg.min.js" defer></script>
    <script src="trumbowyg/dist/plugins/fontfamily/trumbowyg.fontfamily.min.js" defer></script>
    <script src="trumbowyg/dist/plugins/upload/trumbowyg.cleanpaste.min.js" defer></script>
    <script src="trumbowyg/dist/plugins/upload/trumbowyg.pasteimage.min.js" defer></script>
    <script type="text/javascript" src="js/dist/langs/ar.min.js" defer></script>
</body>

</html>