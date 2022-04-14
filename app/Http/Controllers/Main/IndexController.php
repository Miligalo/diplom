<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;

class IndexController extends Controller
{
    public function __invoke()
    {
        $goods = Good::limit(7)->get();
        
        $data = [];
        
        return view('main.index', compact('goods'));
    }
}
