<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Good\StoreRequest;
use App\Models\Good;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        
        Good::firstOrCreate($data);
        return redirect()->route('admin.good.index');
    }
}
