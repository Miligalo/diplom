<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Favourite;
use App\Service\CookieService;

class SearchController extends Controller
{
    public function __construct(private CookieService $favorites)
    {
        
    }
    public function __invoke(Request $request)
    {
        
        $search = $request->input('query');
        $categories = Category::all();
        $brands = Brand::all();

        $goods = Good::query()->where('title', 'LIKE', "%{$search}%")->paginate(10);
        $favoriteIds = $this->favorites->getFavorites(auth()->check(), auth()->id());
        
        return view('main.shop', compact('goods', 'categories', 'brands','favoriteIds'));
    }
}
