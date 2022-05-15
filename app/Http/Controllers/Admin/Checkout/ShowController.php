<?php

namespace App\Http\Controllers\Admin\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function __invoke( $checkout)
    {
        $checkout=DB::table('checkout')->where('id',$checkout)->first();
        return view('admin.checkout.show', compact('checkout'));
    }
}
