{{-- Uso layout base --}}
@extends('layouts.base')
{{-- Imposto yield titolo pagina --}}
@section('pageTitle', 'Home')

@section('content')
    {{-- qui va main --}}
    <main id="comic-page">
        <div class="container">
            <div class="divider"></div>
            <h1>{{$comics[0]['title']}}</h1>
        </div>
    </main>
@endsection