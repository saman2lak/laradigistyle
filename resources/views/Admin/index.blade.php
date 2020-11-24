@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid p-4 clearfix">
    <div class="row">
        <div class="col-md-3 col-6 p-0">
            <div class="content p-2">
                <i class="fas fa-user fa-3x"></i>
                <p class="p-1">20</p>
                <span class="p-1">تعداد کاربران</span>
            </div>
        </div>

        <div class="col-md-3 col-6 p-0">
            <div class="content p-2">
                <i class="fas fa-comment fa-3x"></i>
                <p class="p-1">33</p>
                <span class="p-1">تعداد نظرات</span>
            </div>
        </div>

        <div class="col-md-3 col-6 p-0">
            <div class="content p-2">
                <i class="fas fa-shopping-cart fa-3x"></i>
                <p class="p-1">11</p>
                <span class="p-1">تعداد سفارشات</span>
            </div>
        </div>

        <div class="col-md-3 col-6 p-0">
            <div class="content p-2">
                <i class="fas fa-book fa-3x"></i>
                <p class="p-1">22</p>
                <span class="p-1">تعداد دوره ها</span>
            </div>
        </div>
    </div>


    <div class="row p-2 justify-content-center">
        <div class="col-4 bg-info rounded-pill p-3 m-2 text-center">جدیدترین نظرات</div>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">شماره نظر</th>
                    <th scope="col">نام</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">متن</th>
                    <th scope="col">نام محصول</th>
                    <th scope="col">فرزند</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a href="" class="btn btn-danger">حذف</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td><a href="" class="btn btn-danger">حذف</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td><a href="" class="btn btn-danger">حذف</a></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="row p-2 justify-content-center">
        <div class="col-4 bg-info rounded-pill p-3 m-2 text-center">جدیدترین سفارشات</div>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">شماره نظر</th>
                    <th scope="col">نام</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">متن</th>
                    <th scope="col">نام محصول</th>
                    <th scope="col">فرزند</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a href="" class="btn btn-danger">حذف</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td><a href="" class="btn btn-danger">حذف</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td><a href="" class="btn btn-danger">حذف</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
