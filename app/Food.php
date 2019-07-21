<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'image','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
