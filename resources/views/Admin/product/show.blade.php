@extends('layouts.adminLayout')
@section('content')
    <div class="container-fluid">
        <div class="row p-2 m-1">
            <div class="col-12 text-right border border-black">
                <div class="border-bottom">
                    <h4 class="pt-2">نمایش محصولات</h4>
                </div>
                <div class="panel-body col-12 min-vh-100 p-2">
                    <table class="table table-striped w-100">
                        <thead>
                        <tr>
                            <th scope="col">نام</th>
                            <th scope="col">قیمت</th>
                            <th scope="col">تخفیف ها</th>
                            <th scope="col">دسته ها</th>
                            <th scope="col">تاریخ درج</th>
                            <th scope="col">مشاهده کالا</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->name }}</th>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->getDiscount($product->id) }}</td>
                                <td>{{ $product->categoryProduct($product->category_id) }}</td>
                                <td>{{ \Morilog\Jalali\Jalalian::forge($product->created_at )->format('%d %B , %Y')}}</td>
                                <td>
                                    <input type="submit" class="btn btn-primary" data-toggle="modal"
                                           data-target="#showModal{{$product->id}}" value="ویرایش"
                                           v-on:click="dataToModal({{$product->id}})">
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-danger" value="حذف"
                                           @click="deleteBrand({{$product->id}})">
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
    @foreach($products as $product)
        <div class="modal fade " id="showModal{{$product->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ویرایش محصول ({{$product->name}})</h5>
                        <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row text-right">
                        <div class="col-12 col-md-12">
                            @foreach($images as $image)
                                @if($image->product_id == $product->id)
                                    <div class="form-group">
                                        <label for="name"> عکس محصول</label>
                                        {!! getImageProduct($image->image_id) !!}

                                    </div>
                                @endif
                            @endforeach
                            <table class="table table-bordered col-12 col-md-6">
                                <thead>
                                <tr>
                                    <th>نام</th>
                                    <th>کشور</th>
                                    <th>عکس</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    @if($brand->product_id == $product->id)
                                        <div class="form-group">
                                            {!! getbrand($brand->brand_id) !!}
                                        </div>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <table class="table table-bordered col-12 col-md-6">
                                <thead>
                                <tr>
                                    <th>نام</th>
                                    <th>نوع</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productattrs as $productattr)
                                    @if($productattr->product_id == $product->id)
                                        <div class="form-group">
                                            {!! getattributeitem($productattr->attributeitem_id) !!}
                                        </div>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                <label for="name">ایمیل</label>
                                <input class="form-control" type="text" name="" id="emailEdit">
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
    @endforeach
@endsection
