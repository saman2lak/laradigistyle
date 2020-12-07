<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    //

    public function index()
    {
        $discounts = Discount::orderby('id','desc')->paginate(15);
        return view('Admin.discount.index',compact('discounts'));
    }

    public function create()
    {
        $products =Product::all();
        return view('Admin.discount.create',compact('products'));
    }

    public function store(Request $request)
    {
        $brand = new Discount();
        $brand->name = $request->name;
        $brand->value = $request->value;
        $brand->beginDate = $request->begindate;
        $brand->endDate = $request->enddate;
        $brand->product_id = $request->productId;
        if ($brand->save()){
            return $brand;
        }
    }

    public function delete($id)
    {
        $discount = Discount::find($id)->delete();
        return $discount;
    }
}
