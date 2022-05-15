<?php

namespace App\Http\Controllers\Admin\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function __invoke($checkout)
    {
       
        $checkout= DB::table('checkout')->where('id',$checkout)->delete();
        return redirect()->route('admin.checkout.index');
    }
}
