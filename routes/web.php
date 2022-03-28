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
});

//route per comic\
Route::get('/comic', function(){
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
 
    
    $data= ['comics' => $comics, 'headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    return view('comic', $data);
});
