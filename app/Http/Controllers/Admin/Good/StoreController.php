<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Good\StoreRequest;
use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        $data['preview_image'] = Storage::put('/images', $data['preview_image']);
        Good::firstOrCreate($data);
        return redirect()->route('admin.good.index');
    }
}
