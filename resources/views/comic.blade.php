{{-- Uso layout base --}}
@extends('layouts.base')
{{-- Imposto yield titolo pagina --}}
@section('pageTitle', 'Home')

@section('content')
    {{-- qui va main --}}
    <main id="comic-page">
        <div class="img-float">
            <img src="{{$selectedComic['thumb']}}" alt="{{$selectedComic['title']}}">
            <div class="gallery"><span class="txt-uc">view gallery</span></div>
            <div class="comic-book"><span class="txt-uc">Comic Book</span></div>
        </div>
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
        </div>    
        <div class="desc">
            <div class="container">

                <div class="desc-left">
                    <h3>Talent</h3>
                    <hr>
                    <div class="artist">
                        <span>Art by: </span>
                        <div class="artist-link">
                            @foreach ($selectedComic['artists'] as $artist)
                            <a href="#">{{$artist}} ,</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="writers">
                        <span>Written by: </span>
                        <div class="writers-link">
                            @foreach ($selectedComic['writers'] as $writer)
                            <a href="#">{{$writer}} ,</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="desc-right">
                    <h3>Specs</h3>
                    <hr>
                    <div class="line">
                        <span>Series: </span>
                        <a href="#">{{$selectedComic['series']}}</a>
                    </div>
                    <hr>
                    <div class="line">
                        <span>Price: </span>
                        <a href="#">{{$selectedComic['price']}}</a>
                    </div>
                    <hr>
                    <div class="line">
                        <span>On Sale Date: </span>
                        <a href="#">{{$selectedComic['sale_date']}}</a>
                    </div>
                    <hr>
                </div>

            </div>

        </div>
    </main>
@endsection