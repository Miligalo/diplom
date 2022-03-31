<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke( $good)
    {
        $good=Good::query()->where('id',$good)->first();
        return view('admin.goods.show', compact('good'));
    }
}
