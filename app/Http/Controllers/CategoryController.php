<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Parentt;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::all();
        return view('Admin.category.create',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id'=>'required',
            'name'=>'required',
        ],[
            'id.required' => 'وارد کردن دسته مادر اجباری است',
            'name.required' => 'وارد کردن نام دسته اجباری است'
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->id;
        if($category->save()){
            return $category;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        $this->validate($request,[
            'id'=>'required',
        ],[
            'id.required' => 'وارد کردن نام دسته اجباری است'
        ]);
        $id = $request->id;
        $category = Category::find($id)->delete();
        return 'true';
    }
}