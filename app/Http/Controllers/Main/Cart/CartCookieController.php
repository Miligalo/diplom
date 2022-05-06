<?php

namespace App\Http\Controllers\Main\Cart;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class CartCookieController extends Controller
{
    public function __invoke(Good $good)
    {
        if(!empty($_COOKIE['cartCookie'])){
            $cart = json_decode($_COOKIE['cartCookie'], true);
            if(!in_array($good->id, $cart)){
                $cart[] = $good->id;
                setcookie('cartCookie',json_encode($cart), time() + 60 * 60 * 24, '/');
            }
        }
        else{
            setcookie('cartCookie', json_encode([$good->id]), time() + 60 * 60 * 24, '/');
        }
        
        
        return redirect()->back();
    }
}
