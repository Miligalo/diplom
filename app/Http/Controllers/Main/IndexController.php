<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Service\FavoriteService;
use App\Models\Favourite;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Good;

class IndexController extends Controller
{

    public function __construct(private FavoriteService $fav)
    {
        
    }
    public function __invoke()
    {
        $goods = Good::limit(4)->get();
        
        $data = [];

        $favoriteIds = $this->fav->get();

        
        return view('main.index', compact('goods', 'favoriteIds'));
    }
}
