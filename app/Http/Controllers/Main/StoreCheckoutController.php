<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Checkout\StoreRequest;
use App\Models\Cart;
use App\Models\Post;

use App\Models\Good;
use App\Service\CookieService;
use Illuminate\Support\Facades\DB;

class StoreCheckoutController extends Controller
{   
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        if(auth()->check()){
            $goods = auth()->user()->cartGood;
            foreach($goods as $good){
                $data['good_id'] = $good->id;
              $db = DB::table('checkout')->insert($data);
            }
            Cart::query()->where('user_id',auth()->id())->delete();
           
        }
        else{
           if(!empty($_COOKIE['cartCookie'])){
            $goods = Good::query()->whereIn('id', json_decode($_COOKIE['cartCookie'],true))->get();
            foreach($goods as $good){
                $data['good_id'] = $good->id;
                DB::table('checkout')->insert($data);
            }
            setcookie('cartCookie',0, time(), '/');
           } 
           else{
               $goods = null;
           }
        }
        return view('main.finish', compact('goods'));
    }
}
