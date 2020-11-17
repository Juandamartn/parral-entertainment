<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="parral, entretenimiento, memes, chistes, podcast" />
    <meta name="description"
        content="Parral Entertainment es un sitio web con el único propósito de entretener a la gente, de Parral Chihuahua para todo el mundo" />
    <meta name="author" content="Parral Entertainment" />
    <meta name="theme-color" content="#000000" />

    {{--
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    <title>Parral Entertainment</title>
</head>

<body>
    <div id="root"></div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
