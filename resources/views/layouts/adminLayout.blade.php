<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/dropzone.min.css">
    <link rel="stylesheet" href="/css/admin.css">


</head>

<body>


@include('layouts.adminHeader')

<div id="app">
    @yield('content')
</div>


<aside class="sidebar">
    <ul class="text-right">
        <a href="/admin/index">
            <li>
                <i class="fas fa-desktop fa-1x ml-2"></i>
                میز کار
            </li>
        </a>
        <li data-toggle="collapse" data-target="#toggleDemo1">
            <i class="fas fa-users fa-1x ml-2"></i>مدیریت کاربران
        </li>
        <ul id="toggleDemo1" class="toggleMenu collapse">
            <a href="{{ route('user.create') }}">
                <li>ایجاد کاربر جدید</li>
            </a>
            <a href="{{ route('user.index') }}">
                <li>مدیریت کاربران</li>
            </a>
        </ul>

        <li data-toggle="collapse" data-target="#toggleDemo2">
            <i class="fas fa-gifts fa-1x ml-2"></i>مدیریت محصولات
        </li>
        <ul id="toggleDemo2" class="toggleMenu collapse">
            <a href="/admin/product">
                <li>افزودن محصول</li>
            </a>
            <a href="#">
                <li>new</li>
            </a>
        </ul>

        <li data-toggle="collapse" data-target="#toggleDemo3">
            <i class="fas fa-tasks fa-1x ml-2"></i>مدیریت دسته ها
        </li>
        <ul id="toggleDemo3" class="toggleMenu collapse">
            <a href="/admin/category">
                <li>ساخت دسته جدید</li>
            </a>
            <a href="{{ route('brand.index') }}">
                <li>مدیریت برندها</li>
            </a>
            <a href="{{ route('brand.create') }}">
                <li>ایجاد برندها</li>
            </a>
            <a href="{{ route('discount.index') }}">
                <li>مدیریت تخفیفات</li>
            </a>
            <a href="{{ route('discount.create') }}">
                <li>ایجاد تخفیف</li>
            </a>
        </ul>

        <li data-toggle="collapse" data-target="#toggleDemo4">
            <i class="fas fa-shopping-cart fa-1x ml-2"></i>مدیریت سفارش ها
        </li>
        <ul id="toggleDemo4" class="toggleMenu collapse">
            <a href="#">
                <li>new</li>
            </a>
            <a href="#">
                <li>new</li>
            </a>
            <a href="#">
                <li>new</li>
            </a>
        </ul>

        <li data-toggle="collapse" data-target="#toggleDemo6">
            <i class="fas fa-comments fa-1x ml-2"></i>مدیریت دیدگاه ها
        </li>
        <ul id="toggleDemo6" class="toggleMenu collapse">
            <a href="#">
                <li>new</li>
            </a>
            <a href="#">
                <li>new</li>
            </a>
            <a href="#">
                <li>new</li>
            </a>
        </ul>

    </ul>
</aside>

<div class="footer"></div>

<script src="/js/dropzone.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/admin.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>

</body>

</html>
