<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Builder;

class Good extends Model
{
    use HasFactory;
    protected $table = 'goods';
    protected $guarded = false;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
