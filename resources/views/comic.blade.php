{{-- Uso layout base --}}
@extends('layouts.base')
{{-- Imposto yield titolo pagina --}}
@section('pageTitle', 'Home')

@section('content')
    {{-- qui va main --}}
    <main id="comic-page">
        <div class="divider"></div>
        <div class="container">
            <div class="overview">
               <div class="overview-left">
                   <h1>{{$selectedComic['title']}}</h1>
                   <div class="price">
                       <div class="price-left">
                           <span>Us Price: {{$selectedComic['price']}}</span>
                           <span class="txt-uc">Available</span>
                       </div>
                       <div class="price-right">
                           <select name="check-av" id="av-check">
                               <option value="">Check Availability</option>
                           </select>
                       </div>
                    </div>
                    <p>{{$selectedComic['description']}}</p>
                </div> 
                <div class="overview-right">
                    <span class="txt-uc">Advertisement</span>
                    <img src="{{$selectedComic['thumb']}}" alt="{{$selectedComic['title']}}">
                </div>
            </div>
            <div class="desc">
                
            </div>
        </div>
    </main>
@endsection