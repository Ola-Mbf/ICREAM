<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasMany(Product::class , 'category_id');
    }

    public function chefs()
    {
        return $this->belongsToMany(Chef::class, 'chef_category' , 'chef_id' , 'category_id');
    }
}
