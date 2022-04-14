<?php

namespace App\Http\Controllers\Main\Favorite;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCookieController extends Controller
{
    public function __invoke(int $id)
    {
            $favorite = json_decode($_COOKIE['favoriteCookie'],true);

            $index = array_search($id, $favorite);
            unset($favorite[$index]);
            
            setcookie('favoriteCookie',json_encode($favorite), time() + 60 * 60 * 24, '/');
        
        
        return redirect()->back();
    }
}
