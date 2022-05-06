<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Service\CookieService;
use App\Models\Favourite;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;


class IndexController extends Controller
{
    
    public function __construct(private CookieService $favorites)
    {
        
    }

    public function __invoke()
    {
        $goods = Good::limit(4)->get();
        
        $data = [];

        $favoriteIds = $this->favorites->getFavorites(auth()->check(), auth()->id());

        $cartGoods = auth()->user()?->cartGood;

        $countCartGoods = auth()->user()?->cartGood->count();
        $sumPriceCartGoods = auth()->user()?->cartGood->sum('price');

        
        return view('main.index', compact('goods', 'favoriteIds', 'cartGoods','countCartGoods', 'sumPriceCartGoods'));
    }
}
