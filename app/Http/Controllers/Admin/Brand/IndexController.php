<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();
        return view('admin.brands.index',compact('brands'));
    }
}
