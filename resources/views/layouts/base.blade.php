<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- nome della pagina non costante --}}
    <title>@yield('pageTitle')</title>
    {{-- collegamento tramite asset alla cartella public e al css compilato  --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- avrà semprel o stesso header, link section e footer --}}
    @include('partials.header')

    {{-- segnaposto per contenuto main da popolare dinamicamente --}}
    @yield('content')

    @include('partials.linkSection')

    @include('partials.footer')
</body>
</html>