<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    public function attributeitems(){
        return $this->belongsToMany(Attributeitem::class);
    }

    public function images(){
        return $this->belongsToMany(Image::class);
    }

    public function categories(){
        return $this->hasOne(Category::class);
    }

    public function discounts(){
        return $this->hasMany(Discount::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function getDiscount($id)
    {
        $discount = $this->discounts()->where('product_id',$id)->get();
        foreach ($discount as $value){
            return $value->name;
        }
    }

    public function categoryProduct($id)
    {
        $category = Category::find($id);
        return $category->name;
    }

    public function getImageProduct($id){
        $images = image_product::find($id);
        return '<img src="/imageProduct/'.$images->image.'" width="100px" height="100px">';
    }


}
