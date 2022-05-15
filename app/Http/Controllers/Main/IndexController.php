<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Service\CookieService;
use App\Models\Favourite;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;


class IndexController extends Controller
{
    
    public function __construct(private CookieService $cookieService)
    {
        
    }

    public function __invoke()
    {
        $goods = Good::limit(4)->get();
        
        $data = [];

        $favoriteIds = $this->cookieService->getFavorites(auth()->check(), auth()->id());

        $cartIds = $this->cookieService->getCarts(auth()->check(), auth()->id());

        $items = Good::query()->where('category_id', '=', '1')->limit(4)->get();

    
        
        return view('main.index', compact('goods', 'favoriteIds','cartIds', 'items'));
    }
}
