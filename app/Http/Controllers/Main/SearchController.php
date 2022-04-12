<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        
        $search = $request->input('query');
        $categories = Category::all();
        $brands = Brand::all();

        $goods = Good::query()->where('title', 'LIKE', "%{$search}%")->paginate(10);
        
        return view('main.shop', compact('goods', 'categories', 'brands'));
    }
}
