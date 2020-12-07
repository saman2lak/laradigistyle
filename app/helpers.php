<?php

use App\Models\Attributeitem;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;

function category($parent_id="0"){
    $categories = Category::where("parent_id",$parent_id)->get();
    $body = '';
    foreach ($categories as $cat) {
        $body .= '<ul class="tree"><li><a href="#">'.$cat->name.'</a></li>'.category($cat->id).'</ul>';
    }
    return $body;
}

function getImageProduct($id){
    $images = Image::find($id);
    return '<img src="/imageProduct/'.$images->image.'" width="200px" height="100px">';
}

function getbrand($id){
    $brands = Brand::find($id);
    return '<tr><td>'.$brands->name.'</td><td>'.$brands->country.'</td><td><img src="/imagebrand/'.$brands->image.'" width="200px" height="100px"></td></tr>';
}

function getattributeitem($id){
    $attribute = Attributeitem::find($id);
    return '<tr><td>'.$attribute->name.'</td></tr>';
}

