<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;
use App\Service\CookieService;

class FavoriteController extends Controller
{
    public function __construct(private CookieService $favorites)
    {
        
    }
    public function __invoke()
    {
        if(auth()->check()){
            $goods = auth()->user()->favoriteGood;
        }
        else{
           if(!empty($_COOKIE['favoriteCookie'])){
            $goods = Good::query()->whereIn('id', json_decode($_COOKIE['favoriteCookie'],true))->get();
           } 
           else{
               $goods = null;
           }
        }

        $favoriteIds = $this->favorites->getFavorites(auth()->check(), auth()->id());

        return view('main.favorite', compact('goods', 'favoriteIds'));
    }
}
