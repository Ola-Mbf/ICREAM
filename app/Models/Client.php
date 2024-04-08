<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function products(){
        return $this->belongsTo(Product::class , 'product_id');
     }
    
     public function services(){
        return $this->belongsTo(Service::class , 'service_id');
     }
}
