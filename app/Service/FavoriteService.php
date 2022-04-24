<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\Category;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class FavoriteService
{
    public function get():array
    {
        if(auth()->check()){
            $res = [];
            $favs = Favourite::query()->where('user_id',auth()->id())->get();
            foreach($favs as $fav){
                $res[] = $fav->good_id;
            }
        }
        else{
            
            $res = json_decode($_COOKIE['favoriteCookie']);
        }
        return $res;
    }
}
