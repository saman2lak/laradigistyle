<?php

use App\Models\Category;

function category($parent_id="0"){
    $categories = Category::where("parent_id",$parent_id)->get();
    $body = '';
    foreach ($categories as $cat) {
        $body .= '<ul class="tree"><li><a href="#">'.$cat->name.'</a></li>'.category($cat->id).'</ul>';
    }
    return $body;
}