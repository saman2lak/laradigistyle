@extends('layouts.adminLayout')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center p-2 m-1">
            <div class="col-12 text-right border border-black">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab"
                           aria-controls="nav-home" aria-selected="true">مرحله اول (افزودن مشخصه ها)</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab"
                           aria-controls="nav-profile" aria-selected="false">مرحله دوم (افزودن محصول)</a>
                        <a class="nav-item nav-link" id="nav-pic-tab" data-toggle="tab" href="#nav-pic"
                           role="tab"
                           aria-controls="nav-pic" aria-selected="false">مرحله سوم (تصاویر محصول)</a>
                    </div>
                </nav>
                <div class="tab-content " id="nav-tabContent">
                    <div class="tab-pane fade show active min-vh-100" id="nav-home" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="container-fluid">
                            <div class="row align-items-start p-2">
                                <div class="form-group col-12 col-md-3">
                                    <label for="namegroup">عنوان گروه کالایی</label>
                                    <input class="form-control" id="namegroup" type="text"
                                           placeholder="عنوان دسته را وارد نمایید" v-model="namegroup">
                                    <label class="mt-2" for="exampleFormControlSelect1">دسته کالا را کنید</label>
                                    <select class="form-control" id="exampleFormControlSelect1" v-model="selectgroup">
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach

                                    </select>
                                    <button type="submit" class="btn btn-success m-2" v-on:click="addgroup">ذخیره
                                    </button>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label for="nameattribute">عنوان مشخصه</label>
                                    <input class="form-control" id="nameattribute" type="text"
                                           placeholder="عنوان مشخصه را وارد نمایید" v-model="nameattribute">
                                    <label class="mt-2" for="exampleFormControlSelect1">گروه کالایی را انتخاب
                                        کنید</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                            v-model="selectattribute">
                                        <option v-for="group in groupsz" :value="group.id">@{{group.name}}</option>
                                        @foreach ($Attributegroup as $attrgroup)
                                            <option value="{{ $attrgroup->id }}">{{ $attrgroup->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-success m-2"
                                            v-on:click="addattribute">ذخیره
                                    </button>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <div class="form-group">
                                        <label for="nameattributeitem">مقدار</label>
                                        <input class="form-control" id="nameattributeitem" type="text"
                                               placeholder="مقدار"
                                               v-model="nameattributeitem">
                                        <label class="mt-2" for="selectattributeitem">مقدار</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                                v-model="selectattributeitem">
                                            <option v-for="attrT in attrTitle" :value="attrT.id">@{{attrT.name}}
                                            </option>
                                            @foreach ($Attribute as $attr)
                                                <option value="{{ $attr->id }}">{{ $attr->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-success m-2"
                                                v-on:click="addAttributeItem">ذخیره
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <div class="form-group">
                                        <label for="nameize">سایز</label>
                                        <input class="form-control" id="nameize" type="text" placeholder="سایز"
                                               v-model="namegroupsize">
                                        <label class="mt-2" for="selectattribute">گروه کالایی</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                                v-model="selectgroupsize">
                                            <option v-for="group in groupsz" :value="group.id">@{{group.name}}</option>
                                            @foreach ($Attributegroup as $attrgroup)
                                                <option value="{{ $attrgroup->id }}">{{ $attrgroup->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-success m-2"
                                                v-on:click="addgroupsize">ذخیره
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade p-3 min-vh-100" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container-fluid">
                            <div class="row align-items-start p-2">
                                <div class="form-group col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="attr">عنوان</label>
                                        <input class="form-control" id="attr" type="text"
                                               placeholder="عنوان مشخصه را وارد نمایید" v-model="productName">
                                    </div>
                                    <div class="form-group">
                                        <label for="attr">توضیحات</label>
                                        <textarea class="form-control" name="" id="" cols="30" rows="5"
                                                  v-model="productDesc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="attr">قیمت</label>
                                        <input class="form-control" id="attr" type="text"
                                               placeholder="عنوان مشخصه را وارد نمایید" v-model="productPrice">
                                        <input id="product_id" type="hidden">
                                    </div>
                                    <div class="form-group  ">
                                        <label for="attr">دسته بندی </label>
                                        <select class="form-control" id="exampleFormControlSelect1" v-model="category_id">
                                            @foreach ($category as $categ)
                                                <option value="{{ $categ->id }}">{{ $categ->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success m-2"
                                                v-on:click="addProduct">ارسال
                                        </button>
                                    </div>
                                </div>


                                <div class="form-group col-12 col-md-6">
                                    <div class="form-group d-flex">
                                        <label class="" for="attr">سایز</label>
                                        <select class="form-control mr-3 col-7" id="exampleFormControlSelect1"
                                                v-model="size_id">
                                            @foreach ($Sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->size }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" id="addSize" class="btn btn-primary mr-3"
                                                v-on:click="addSize">
                                            ارسال
                                        </button>
                                    </div>
                                    <div class="form-group d-flex">
                                        <label for="attr">عنوان خصوصیت</label>
                                        <select class="form-control mr-3 col-6" id="exampleFormControlSelect1" v-model="attr_id">
                                            @foreach ($Attribute as $attribut)
                                                <option value="{{ $attribut->id }}">{{ $attribut->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" id="addAttribute" class="btn btn-primary mr-3"
                                                v-on:click="addAttribute">
                                            ارسال
                                        </button>
                                    </div>
                                    <div class="form-group d-flex">
                                        <label for="attr">مقدار </label>
                                        <select class="form-control mr-3 col-7" id="exampleFormControlSelect1" v-model="attrItem_id">
                                            @foreach ($AttributeItems as $attrItem)
                                                <option value="{{ $attrItem->id }}">{{ $attrItem->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" id="addValueAttribute" class="btn btn-primary mr-3"
                                                v-on:click="addValueAttribute">
                                            ارسال
                                        </button>
                                    </div>
                                    <div class="form-group d-flex">
                                        <label for="attr">برند </label>
                                        <select class="form-control mr-3 col-7" id="exampleFormControlSelect1" v-model="brand_id">
                                            @foreach ($Brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" id="addBrand" class="btn btn-primary mr-3"
                                                v-on:click="addBrand">
                                            ارسال
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade  min-vh-100" id="nav-pic" role="tabpanel"
                         aria-labelledby="nav-pic-tab">
                        <div class="container-fluid">
                            <div class="row align-items-start p-2">
                                <div class="form-group col-12 col-md-6">
                                    <label for="namegroup">افزودن تصویر</label>
                                    <div class="form-group">
                                        <form action="/admin/productimage" class="dropzone" id="my-awesome-dropzone">
                                            @csrf</form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
