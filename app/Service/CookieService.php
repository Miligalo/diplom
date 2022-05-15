<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Good;
use App\Models\Category;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class CookieService
{
    public function getFavorites(bool $authCheck, int $authId = null):array
    {
        $resFavorite = [];

        if($authCheck){
            $favorites = Favourite::query()->where('user_id',$authId)->get();
            foreach($favorites as $favorite){
                $resFavorite[] = $favorite->good_id;
            }
        }
        elseif (!empty($_COOKIE['favoriteCookie'])){
            
            $resFavorite = json_decode($_COOKIE['favoriteCookie'],true);
        }

        return $resFavorite;
    }


    public function getCarts(bool $authCheck, int $authId = null):array
    {
        $resCart = [];

        if($authCheck){
            $carts = Cart::query()->where('user_id',$authId)->get();
            foreach($carts as $cart){
                $resCart[] = $cart->good_id;
            }
        }
        elseif (!empty($_COOKIE['cartCookie'])){
            
            $resCart = json_decode($_COOKIE['cartCookie'],true);
        }
        return $resCart;
    }
}
