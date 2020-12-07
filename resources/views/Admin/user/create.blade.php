@extends('layouts.adminLayout')
@section('content')
    <div class="container-fluid">
        <div class="row p-2 m-1">
            <div class="col-12 text-right border border-black">
                <div class="border-bottom">
                    <h4 class="pt-2">ایجاد کاربر جدید</h4>
                </div>
                <div class="panel-body col-6 min-vh-100 p-2">
                    <div class="form-group">
                        <label for="name">نام</label>
                        <input class="form-control" type="text" name="" v-model="fname">
                    </div>
                    <div class="form-group">
                        <label for="name">نام خانوادگی</label>
                        <input class="form-control" type="text" name="" v-model="lname">
                    </div>
                    <div class="form-group">
                        <label for="name">نقش کاربر</label>
                        <select class="form-control" name="" id="" v-model="rule">
                            <option value="0">کاربر</option>
                            <option value="1">مدیر</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">ایمیل</label>
                        <input class="form-control" type="text" name="" v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="name">کلمه عبور</label>
                        <input class="form-control" type="text" name="" v-model="password">
                    </div>
                    <div class="form-group">
                        <form action="/admin/uploadUser" class="dropzone" id="urlImageUser">
                            @csrf</form>
                        <input type="hidden" id="urlImageUser1">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success m-2" v-on:click="addUser"
                        >ارسال
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
