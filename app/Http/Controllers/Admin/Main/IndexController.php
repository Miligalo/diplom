<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Good;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::query()->count();
        $data['categoriesCount'] = Category::query()->count();
        $data['goodsCount'] = Good::query()->count();

        return view('admin.main.index', compact('data'));
    }
}
