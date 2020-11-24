@extends('layouts.adminLayout')
@section('content')
    <div class="container-fluid">
        <div class="row p-2 m-1">
            <div class="col-12 text-right border border-black">
                <div class="border-bottom">
                    <h4 class="pt-2">ایجاد تخفیف ها</h4>
                </div>
                <div class="panel-body col-6 min-vh-100 p-2 mr-auto ml-auto">

                    <div class="form-group">
                        <label for="name">نام تخفیف</label>
                        <input class="form-control" id="name" type="text"
                               placeholder="عنوان مشخصه را وارد نمایید" v-model="discountname">
                    </div>
                    <div class="form-group">
                        <label for="country">مقدار برند</label>
                        <input class="form-control" id="country" type="text"
                               placeholder="عنوان مشخصه را وارد نمایید" v-model="discountvalue">
                    </div>
                    <div class="form-group">
                        <label for="country">تاریخ شروع</label>
                        <date-picker v-model="date"></date-picker>
                    </div>
                    <div class="form-group">
                        <label for="country">تاریخ پایان</label>
                        <date-picker v-model="dateend"></date-picker>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success m-2"
                                v-on:click="saveDiscount">ارسال
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
