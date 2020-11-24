<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentt extends Model
{
    use HasFactory;
    protected $table = 'parents';
    public $timestamps = false;
    protected $guarded = ['id'];
}