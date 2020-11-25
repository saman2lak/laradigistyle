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
                                <td>
                                    @if($user->image)
                                        <img src="/userProfile/{{ $user->image }}" width="100px">
                                    @else
                                        <img src="/image/profile.png" width="80px">
                                    @endif

                                </td>
                                <td>
                                    {!! $user->status == 1 ? "<span class='text-success align-middle'>فعال</span>":"<span class='text-success'>غیرفعال</span>" !!}

                                    <a href="javascript:;" v-on:click="approve({{$user->id}})"><i
                                            class="far fa-check-circle" style="color:green;font-size: 26px;"></i></a>
                                    <a href="javascript:;" v-on:click="approve({{$user->id}})"><i
                                            class="far fa-minus-square" style="color:red;font-size: 26px;"></i></a>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-danger" value="حذف"
                                           v-on:click="deleteUser({{$user->id}})">
                                    <input type="submit" class="btn btn-primary" data-toggle="modal"
                                           data-target="#editModal" value="ویرایش" v-on:click="dataToModal({{$user->id}})">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ویرایش کاربر</h5>
                    <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row text-right">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="name">نام</label>
                            <input class="form-control" type="text" name=""  id="fnameEdit">
                            <input type="hidden" id="idEdit">
                        </div>
                        <div class="form-group">
                            <label for="name">نام خانوادگی</label>
                            <input class="form-control" type="text" name=""  id="lnameEdit">
                        </div>
                        <div class="form-group">
                            <label for="name">نقش کاربر</label>
                            <select class="form-control" name="" id="ruleEdit">
                                <option value="0">کاربر</option>
                                <option value="1">مدیر</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="name">ایمیل</label>
                            <input class="form-control" type="text" name=""  id="emailEdit">
                        </div>
                        <div class="form-group">
                            <form action="/admin/uploadUserEdit" class="dropzone" id="urlImageUserEdit">
                                @csrf</form>
                            <input type="hidden" id="urlImageUser1Edit">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <button type="button" class="btn btn-primary" v-on:click="editUser">ذخیره تغییرات</button>
                </div>
            </div>
        </div>
    </div>
@endsection
