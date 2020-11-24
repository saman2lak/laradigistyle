@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center p-2 m-1">
        <div class="col-12 text-right border border-black">
            <div class="border-bottom">
                <h4 class="pt-2">ایجاد دسته ها</h4>
            </div>
            <div class="panel-body min-vh-100 p-2 justify-content-center">
                <div class="my-form row col-12 justify-content-center">
                    <div class="form-group col-12 col-md-7 mb-3">
                        <label for="validationServer01">نام دسته</label>
                        <select name="" class="custom-select is-valid" v-model="select1" required>
                            <option v-for="cat in categories" :value="cat.id">@{{ cat.name }}</option>
                            @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            صحیح است!
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-7 mb-3">
                        <button class="btn btn-primary" type="submit" v-on:click="delcategory">حذف دسته</button>
                    </div>
                </div>


                <hr>


                <div class="my-form row col-12 justify-content-center">
                    <div class="form-group col-12 col-md-7 mb-3">
                        <label for="name">نام دسته </label>
                        <input type="text" v-bind:class="BOZ()" id="validationServer01" placeholder="نام دسته " value=""
                            name="name" v-model="categoryname" required>
                        <p class="invalid-feedback" v-for="error in errorsName">@{{ error }}</p>

                        {{-- class="form-control is-invalid" --}}

                        {{-- <div class="alert alert-danger small" role="alert" v-for="error in errors">
                            @{{ error[0] }}</p>
                    </div> --}}

                </div>
                <div class="form-group col-12 col-md-7 mb-3">
                    <select name="parent_id" v-bind:class="BOZ2()" v-model="select" required>
                        <option value="0">-دسته مادر-</option>
                        <option v-for="cat in categories" :value="cat.id">@{{ cat.name }}</option>
                        @foreach ($categorys as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <p class="invalid-feedback" v-for="error in errorsId">@{{ error }}</p>
                </div>
                <div class="form-group col-12 col-md-7 mb-3">
                    <button class="btn btn-primary" type="submit" v-on:click="category">ایجاد</button>
                </div>
            </div>

            <hr>

            <div class="row my-form col-12 justify-content-center text-center">
                <div class="col-6">
                    <div class="mb-4">شماتیک دسته بندی ها</div>
                    {!! category() !!}
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
