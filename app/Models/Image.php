<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'productimages';
    public $timestamps = false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}