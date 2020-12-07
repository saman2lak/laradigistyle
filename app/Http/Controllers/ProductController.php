<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Attributegroup;
use App\Models\Attributeitem;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Image;
use App\Models\image_product;
use App\Models\Product;
use App\Models\Products_attribute;
use App\Models\Productsbrand;
use App\Models\Productsize;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        $Attributegroup = Attributegroup::all();
        $Attribute = Attribute::all();
        $Sizes = Size::all();
        $AttributeItems = Attributeitem::all();
        $Brands = Brand::all();
        $Discounts = Discount::all();
        return view('Admin.product.index',compact('category','Attributegroup','Attribute','Sizes','AttributeItems','Brands','Discounts'));
    }

    public function show()
    {
        $products = Product::all();
        $images = image_product::all();
        $brands = Productsbrand::all();
        $productattrs = Products_attribute::all();
        $sizes = Productsize::all();
        return view('Admin.product.show',compact('products','images','brands','productattr'  ,'sizes'));
    }

    public function addproduct(Request $request){
         $product = new Product();
         $product->price = $request->price;
         $product->desc = $request->desc;
         $product->name = $request->name;
         $product->category_id = $request->category;
         $product->save();
         return $product;
    }

    public function image(Request $request){
        $file = $request->file('file');
        $filename = time().rand(100,900).$file->getClientOriginalName();
        $file->move('imageProduct',$filename);
        $image = new Image();
        $image->image = $filename;
        if($image->save()){
            $product = Product::latest()->first();
            $image = Image::find($image->id);
            return $product->images()->attach($image->id);
        }
    }

    public function size(Request $request)
    {
        $product = Product::latest()->first();
        $product->sizes()->attach($request->id);
    }

    public function attr(Request $request)
    {
        $product = Product::latest()->first();
        $product->attributes()->attach($request->id);
    }

    public function attritem(Request $request)
    {
        $product = Product::latest()->first();
        $product->attributeitems()->attach($request->id);
    }

    public function brand(Request $request)
    {
        $product = Product::latest()->first();
        $product->brands()->attach($request->id);
    }
}

