<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Models\Good;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $goods = Good::all();
        return view('admin.goods.index',compact('goods'));
    }
}
