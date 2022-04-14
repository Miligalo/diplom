<?php

namespace App\Http\Controllers\Main\Favorite;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __invoke(Good $good)
    {
        auth()->user()->favoriteGood()->toggle($good->id);
        return redirect()->back();
    }
}
