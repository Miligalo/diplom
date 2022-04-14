<?php

namespace App\Http\Controllers\Main\Favorite;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class FavoriteCookieController extends Controller
{
    public function __invoke(Good $good)
    {
        if(!empty($_COOKIE['favoriteCookie'])){
            $favorite = json_decode($_COOKIE['favoriteCookie'], true);
            if(!in_array($good->id, $favorite)){
                $favorite[] = $good->id;
                setcookie('favoriteCookie',json_encode($favorite), time() + 60 * 60 * 24, '/');
            }
        }
        else{
            setcookie('favoriteCookie', json_encode([$good->id]), time() + 60 * 60 * 24, '/');
        }
        
        
        return redirect()->back();
    }
}
