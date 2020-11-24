<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributegroup extends Model
{
    use HasFactory;
    protected $table = 'attributegroups';
    public $timestamps = false;

    public function attributes(){
        return $this->belongsTo(Attribute::class);
    }

    public function sizes(){
        return $this->belongsTo(Size::class);
    }

    public function categories(){
        return $this->hason(Category::class);
    }
}