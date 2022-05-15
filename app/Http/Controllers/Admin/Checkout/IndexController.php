<?php

namespace App\Http\Controllers\Admin\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $checkouts = Checkout::all();
        return view('admin.checkout.index',compact('checkouts'));
    }
}
