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
                            <th scope="col">کد تخفیف</th>
                            <th scope="col">تاریخ شروع</th>
                            <th scope="col">تاریخ پایان</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($discounts as $discount)
                        <tr>
                            <th scope="row">{{ $discount->name }}</th>
                            <td>{{ $discount->value }}</td>
                            <td>{{ $discount->beginDate }}</td>
                            <td>{{ $discount->endDate }}</td>
                            <td>
                                <input type="submit" class="btn btn-danger" value="حذف" @click="deleteDiscount({{$discount->id}})">
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
