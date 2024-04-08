<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    public function categories()
      {
        return $this->belongsToMany(Category::class,'chef_category' , 'chef_id' , 'category_id');
      }
}
