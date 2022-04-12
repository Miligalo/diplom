<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;

class FilterController extends Controller
{
    public function __invoke(Request $request)
    {
        
        $categories = Category::all();
        $brands = Brand::all();
       
        $maxPrice = $request->input('price_max');
        $minPrice = $request->input('price_min');
        $categoriesId = $request->input('category');  
        $brandsId = $request->input('brand');
        
        $query = Good::query()->where('price', '>=', (int)$minPrice)->where('price', '<=', (int)$maxPrice);
        

        if ($brandsId){
            $query = $query->whereIn('brand_id', $brandsId);
        }

        if ($categoriesId){
            $query = $query->whereIn('category_id', $categoriesId);
        }
        $goods = $query->paginate(10);
        
        return view('main.shop', compact('goods', 'categories', 'brands'));
    }
}
