<?php

namespace App\Http\Controllers;

use App\Models\Discount;
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
        return view('Admin.discount.create');
    }

    public function store(Request $request)
    {
        $brand = new Discount();
        $brand->name = $request->name;
        $brand->value = $request->value;
        $brand->beginDate = $request->begindate;
        $brand->endDate = $request->enddate;
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
