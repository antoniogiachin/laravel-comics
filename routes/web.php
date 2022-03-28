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

    $data= ['comics' => $comics, 'Headerlinks' => $headerLinks, 'linkSection' => $linkSection, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink,];
    return view('home', $data);
});
