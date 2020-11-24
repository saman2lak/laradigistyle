@extends('layouts.adminLayout')
@section('content')
    <div class="container-fluid">
        <div class="row p-2 m-1">
            <div class="col-12 text-right border border-black">
                <div class="border-bottom">
                    <h4 class="pt-2">ایجاد برند ها</h4>
                </div>
                <div class="panel-body col-12 min-vh-100 p-2">
                    <table class="table table-striped w-100">
                        <thead>
                        <tr>
                            <th scope="col">نام</th>
                            <th scope="col">کشور</th>
                            <th scope="col">تصویر برند</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <th scope="row">{{ $brand->name }}</th>
                            <td>{{ $brand->country }}</td>
                            <td>
                                <img src="/ImageBrand/{{ $brand->image }}" width="100px" >
                            </td>
                            <td>
                                <input type="submit" class="btn btn-danger" value="حذف" @click="deleteBrand({{$brand->id}})">
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
