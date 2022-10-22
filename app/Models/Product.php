<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function catagories()
    {

        return $this->belongsToMany(Category::class);
    }

    public function orders()
    {
        $this->belongsToMany(Order::class);
    }
}
