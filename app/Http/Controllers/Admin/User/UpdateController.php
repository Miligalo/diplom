<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        if(User::query()->where('email',$request->input('email'))->where('id','!=', $user->id)->exists()){
            abort(400);
        }
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
