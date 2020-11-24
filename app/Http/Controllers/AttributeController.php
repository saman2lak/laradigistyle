<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Attributegroup;
use App\Models\Attributeitem;
use App\Models\Size;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    //
    public function attributegroup(Request $request)
    {
        $attrGroup = new Attributegroup();
        $attrGroup->name = $request->name;
        $attrGroup->category_id = $request->id;
        $attrGroup->save();
        return $attrGroup;

    }

    public function attribute(Request $request)
    {
        $attrGroup = new Attribute();
        $attrGroup->name = $request->name;
        $attrGroup->attributegroup_id = $request->id;
        $attrGroup->save();
        return $attrGroup;
    }

    public function attributeitem(Request $request){
        $attrItem = new Attributeitem();
        $attrItem->name = $request->name;
        $attrItem->attribute_id = $request->id;
        $attrItem->save();
        return $attrItem;
    }

    public function size(Request $request){
        $size = new Size();
        $size->size = $request->name;
        $size->attributegroup_id = $request->id;
        $size->save();
        return $size;
    }
}