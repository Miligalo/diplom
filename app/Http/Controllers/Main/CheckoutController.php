<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;
use App\Service\CookieService;

class CheckoutController extends Controller
{
    
    public function __invoke()
    {
        if(auth()->check()){
            $goods = auth()->user()->cartGood;
            $countSum = Cart::query()->join('goods', 'goods.id', '=', 'carts.good_id')->where('user_id',auth()->id())->sum('goods.price');
        }
        else{
           if(!empty($_COOKIE['cartCookie'])){
            $goods = Good::query()->whereIn('id', json_decode($_COOKIE['cartCookie'],true))->get();
            $countSum = Good::query()->whereIn('goods.id',$goods->pluck('id')->toArray())->sum('price');
            
           } 
           else{
               $goods = [];
               $countSum = 0;
           }
        }

      
        
        return view('main.checkout', compact('goods','countSum'));
    }
}
