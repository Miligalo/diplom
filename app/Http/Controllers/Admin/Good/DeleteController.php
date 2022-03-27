<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Good;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Good $good)
    {
       
        $good->delete();
        return redirect()->route('admin.good.index');
    }
}
