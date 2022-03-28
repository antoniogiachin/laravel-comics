{{-- Uso layout base --}}
@extends('layouts.base')
{{-- Imposto yield titolo pagina --}}
@section('pageTitle', 'Home')

@section('content')
    {{-- qui va main --}}
    <main>
        <div id="jumbotron">

        </div>

        <div class="container">

            <div class="current-series"><span>current series</span></div>
            {{-- ciclo array comics e stampo --}}
            @foreach ($comics as $comic)
                <div class="main-card" >

                    <div class="card-img">
                    <img src="{{$comic['thumb']}}">
                    </div>
            
                    <div class="card-text">
                    <span>{{$comic['title']}}</span>
                    </div>
            
                </div>
            @endforeach
            
            <button class="load-more">Load More</button>
            
          </div>
    </main>
@endsection