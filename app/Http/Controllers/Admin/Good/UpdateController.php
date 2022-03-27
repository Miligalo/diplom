<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Good\UpdateRequest;
use App\Models\Good;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Good $good)
    {
        $data = $request->validated();
        $good->update($data);
        return view('admin.goods.show', compact('good'));
    }
}
