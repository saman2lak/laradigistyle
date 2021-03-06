@extends('layouts.adminLayout')
@section('content')
    <div class="container-fluid">
        <div class="row p-2 m-1">
            <div class="col-12 text-right border border-black">
                <div class="border-bottom">
                    <h4 class="pt-2">ایجاد برند ها</h4>
                </div>
                <div class="panel-body col-6 min-vh-100 p-2 mr-auto ml-auto">

                    <div class="form-group">
                        <label for="name">نام برند</label>
                        <input class="form-control" id="name" type="text"
                               placeholder="عنوان مشخصه را وارد نمایید" v-model="brandName">
                    </div>
                    <div class="form-group">
                        <label for="country">کشور برند</label>
                        <input class="form-control" id="country" type="text"
                               placeholder="عنوان مشخصه را وارد نمایید" v-model="brandCountry">
                    </div>
                    <div class="form-group">
                        <label for="namegroup">افزودن تصویر</label>
                        <div class="form-group">
                            <form method="post" action="/admin/uploadImage" class="dropzone" id="urlupload">
                                @csrf</form>
                            <input type="hidden" id="myurl" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success m-2"
                                v-on:click="saveBrand">ارسال
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
