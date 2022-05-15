<?php

namespace App\Http\Controllers\Main\Cart;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCartCookieController extends Controller
{
    public function __invoke(int $id)
    {
            $cart= json_decode($_COOKIE['cartCookie'],true);

            $index = array_search($id, $cart);
            unset($cart[$index]);
            
            setcookie('cartCookie',json_encode($cart), time() + 60 * 60 * 24, '/');
        
        
        return redirect()->back();
    }
}
