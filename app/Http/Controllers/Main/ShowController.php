<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke( $good)
    {
        $good=Good::query()->where('id',$good)->first();
        return view('main.show', compact('good'));
    }
}
