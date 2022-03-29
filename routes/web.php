<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('home', $data);
})->name('/');

//route per comic\
Route::get('/comic/{comic_id}', function($comic_id){
     // collego i vari config con gli array per popolare dinamicamente
     $headerLinks = config('headerLinks');
     $comics = config('comics');
     $linkSection = config('linkSection');
 
     $footerLinks = config('footerLinks');
     // divido link footer per tipologia
     $comicsLink = [];
     $shopLink = [];
     $dcLink = [];
     $siteLink = [];
     $socialLink = [];
     foreach ($footerLinks as $link){
         if($link['type'] == 'comics'){
             $comicsLink[]= $link;
         } elseif ($link['type'] == 'shop'){
             $shopLink[]= $link;
         } elseif ($link['type'] == 'DC'){
             $dcLink[]= $link;
         } elseif ($link['type'] == 'site'){
             $siteLink[]= $link;
         } else {
             $socialLink[] = $link;
         }
     }
     // verifico id
     if(is_numeric($comic_id) && $comic_id >=0 && $comic_id < count($comics)){
        // se incontra i requisiti salvo il corrispondente array in una variabile
        $selectedComic = $comics[$comic_id];
        $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink, 'selectedComic' => $selectedComic];
        return view ('comic', $data);
     } else {
         abort(404, 'Fumetto non presente!');
     }   
    
})->name('comic');

//routes per altri collegamenti navbar
Route::get('/characters', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('tv', $data);
})->name('tv');

Route::get('/collectibles', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('news', $data);
})->name('news');

Route::get('/shop', function () {

    // collego i vari config con gli array per popolare dinamicamente
    $headerLinks = config('headerLinks');
    $comics = config('comics');
    $linkSection = config('linkSection');

    $footerLinks = config('footerLinks');
    // divido link footer per tipologia
    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLinks as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    // metto tutte le variabili con i config pdentro una variabile per rendere più pulito il codice
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    // al collegamento / mostrami la view home a cui passi $data
    return view('shop', $data);
})->name('shop');

