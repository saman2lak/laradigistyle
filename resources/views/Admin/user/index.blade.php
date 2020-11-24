@extends('layouts.adminLayout')
@section('content')
    <div class="container-fluid">
        <div class="row p-2 m-1">
            <div class="col-12 text-right border border-black">
                <div class="border-bottom">
                    <h4 class="pt-2">مدیریت کاربران </h4>
                </div>
                <div class="panel-body col-12 min-vh-100 p-2">
                    <table class="table table-striped w-100 ">
                        <thead>
                        <tr>
                            <th scope="col">نام</th>
                            <th scope="col">نام خانوادگی</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">نقش</th>
                            <th scope="col">تصویر</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->name }}</th>
                                <td>{{ $user->lname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->rule == 1 ? 'مدیر':"کاربر" }}</td>
                                <td><img src="/userProfile/{{ $user->image }}" width="100px"></td>
                                <td>
                                    {{ $user->status == 1 ? 'فعال':'غیرفعال' }}

                                    <a href="javascript:;" v-on:click="approve({{$user->id}})"><i class="far fa-check-circle" style="color:green;font-size: 26px;"></i></a>
                                    <a href="javascript:;" v-on:click="approve({{$user->id}})"><i class="far fa-minus-square" style="color:red;font-size: 26px;"></i></a>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-danger" value="حذف">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
