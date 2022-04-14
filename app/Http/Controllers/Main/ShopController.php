<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;

class ShopController extends Controller
{
    public function __invoke()
    {
        $maxPrice = 1000;
        $minPrice = 1;
        $categoriesId = [];
        $brandsId = [];

        $goods = Good::paginate(6);
        $categories = Category::all();
        $brands = Brand::all();

        return view('main.shop', compact('goods', 'categories', 'brands','goods', 'categories', 'brands'));
    }
}
