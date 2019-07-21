<?php

namespace App;
use App\Food;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'status'];

    public function food(){
        return $this->hasMany(Food::class);
    }
}
