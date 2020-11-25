<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function uploadUser(Request $request)
    {
        $file = $request->file('file');
        $filename = time().rand(100,900).$file->getClientOriginalName();
        $file->move('userProfile',$filename);
        return $filename;
    }

    public function uploadUserEdit(Request $request)
    {
        $file = $request->file('file');
        $filename = time().rand(100,900).$file->getClientOriginalName();
        $file->move('userProfile',$filename);
        return $filename;
    }

    public function approve(Request $request)
    {
        $status = User::find($request->id)->status;
        if($status==1){
            $user = User::where('id',$request->id)->where('status',$status)->update(['status'=>0]);
        }else if($status==0){
            $user = User::where('id',$request->id)->where('status',$status)->update(['status'=>1]);
        }
        return $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        return view('Admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->fname;
        $user->lname = $request->lname;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->rule = $request->rule;
        $user->image = $request->image;
        if ($user->save()){
            return $user;
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
        return User::find($id);
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
        $users = User::find($id);
        $users->name=$request->fnameEdit;
        $users->lname=$request->lnameEdit;
        $users->email=$request->emailEdit;
        $users->rule=$request->ruleEdit;
        $users->image=$request->image;

        if($users->update()){
            return $users;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::find($id)->delete();
        if($user){
            return 'true';
        }
    }
}
