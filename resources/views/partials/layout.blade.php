<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description }}" />
    <meta name="author" content="Dino Cajic" />

    <link rel="shortcut icon" href="{!! url('/images/favicon.ico') !!}">

    <!-- The Stylesheet -->
    <link rel="stylesheet" href="{!! url('/css/app.css') !!}">

    @yield ('additional_header')
</head>
<body>
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')

    @yield('additional_scripts')
</body>
</html>