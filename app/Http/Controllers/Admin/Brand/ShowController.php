<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke( $brand)
    {
        
        $brand=Brand::query()->where('id',$brand)->first();
        return view('admin.brands.show', compact('brand'));
    }
}
