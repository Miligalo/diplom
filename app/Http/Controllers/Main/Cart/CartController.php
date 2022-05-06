<?php

namespace App\Http\Controllers\Main\Cart;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __invoke(Good $good)
    {
        auth()->user()->cartGood()->toggle($good->id);
  
        return redirect()->back();
    }
}