const {default: Axios} = require("axios");
const {isNull, isNil} = require("lodash");
const {default: Swal} = require("sweetalert2");

require("./bootstrap");

import VuePersianDatetimePicker from 'vue-persian-datetime-picker';

window.Vue = require("vue");

Vue.use(VuePersianDatetimePicker, {
    name: 'custom-date-picker',
    props: {
        editable: false,
        color: '#00acc1',
        autoSubmit: true,
    }
});


Vue.component(
    "date-picker", VuePersianDatetimePicker
);
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);


const app = new Vue({
    el: "#app",
    data: {
        select: [],
        select1: [],
        categories: [],
        errorsId: [],
        errorsName: [],
        categoryname: "",
        namegroup: [],
        selectgroup: [],
        nameattribute: [],
        selectattribute: [],
        nameattributeitem: [],
        selectattributeitem: [],
        namegroupsize: [],
        selectgroupsize: [],
        groupsz: [],
        attrTitle: [],
        productName: "",
        productDesc: "",
        productPrice: "",
        size_id: "",
        attr_id: "",
        attrItem_id: "",
        brand_id: "",
        category_id: "",
        brandName: "",
        brandCountry: "",
        date: "",
        dateend: "",
        discountname: "",
        discountvalue: "",
        fname: "",
        lname: "",
        email: "",
        password: "",
        rule: "",
    },
    created: function () {
    },
    methods: {
        editUser: function (id) {
            var image = $('#urlImageUser1Edit').val();
            var idEdit = $('#idEdit').val();
            var fnameEdit = $('#fnameEdit').val();
            var lnameEdit = $('#lnameEdit').val();
            var emailEdit = $('#emailEdit').val();
            var ruleEdit = $('#ruleEdit').val();
            axios
                .put("/admin/user/" + idEdit, {
                    fnameEdit: fnameEdit,
                    lnameEdit: lnameEdit,
                    emailEdit: emailEdit,
                    ruleEdit: ruleEdit,
                    image: image,
                })
                .then(function (response) {
                    location.reload();
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        dataToModal: function (id) {
            axios
                .get("/admin/user/" + id + "/edit", {}).then(response => {
                $("#fnameEdit").val(response.data.name);
                $("#lnameEdit").val(response.data.lname);
                $("#emailEdit").val(response.data.email);
                $("#idEdit").val(response.data.id);
                $("#ruleEdit").val(response.data.rule);
                $("#urlImageUser1Edit").val(response.data.image);
            })
                .catch(function (error) {
                    console.log(error);
                });
        },
        deleteUser: function (id) {
            axios
                .delete("/admin/user/" + id, {}).then(function (response) {
                app.SweetAlertToast(
                    "عملیات با موفقیت انجام شد!",
                    "success"
                );
                location.reload();
            })
                .catch(function (error) {
                    console.log(error);
                });
        },
        approveUser: function (id) {
            axios
                .get("/admin/getusers", {})
                .then(function (response) {
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        approve: function (id) {
            axios
                .post("/admin/approve", {
                    id: id,
                })
                .then(function (response) {
                    location.reload();
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        addUser: function () {
            var image = $('#urlImageUser1').val();
            axios
                .post("/admin/user", {
                    fname: this.fname,
                    lname: this.lname,
                    email: this.email,
                    rule: this.rule,
                    password: this.password,
                    image: image,
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        deleteDiscount: function (id) {
            axios
                .delete("/admin/discountdelete/" + id, {}).then(function (response) {
                app.SweetAlertToast(
                    "عملیات با موفقیت انجام شد!",
                    "success"
                );
                location.reload();
            })
                .catch(function (error) {
                    console.log(error);
                });
        },
        saveDiscount: function () {
            var x = $('.select2').val();
            axios
                .post("/admin/discountsave", {
                    name: this.discountname,
                    value: this.discountvalue,
                    begindate: this.date,
                    enddate: this.dateend,
                    productId: x,
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );

                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        deleteBrand: function (id) {
            axios
                .delete("/admin/brand/" + id, {}).then(function (response) {
                app.SweetAlertToast(
                    "عملیات با موفقیت انجام شد!",
                    "success"
                );
                location.reload();
            })
                .catch(function (error) {
                    console.log(error);
                });
        },
        saveBrand: function () {
            var image = $('#myurl').val();
            axios
                .post("/admin/brand", {
                    name: this.brandName,
                    country: this.brandCountry,
                    image: image,
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        addProduct: function () {
            axios
                .post("/admin/addproduct", {
                    name: this.productName,
                    desc: this.productDesc,
                    price: this.productPrice,
                    category: this.category_id,
                })
                .then(function (response) {
                    $("#product_id").val(response.data.id);
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        SweetAlertToast: function (text, icon) {
            const Toast = Swal.mixin({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 8000,
                timerProgressBar: true,
                didOpen: toast => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                }
            });
            Toast.fire({
                icon: icon,
                title: text
            });
        },
        addgroupsize: function () {
            axios
                .post("/admin/size", {
                    id: this.selectgroupsize,
                    name: this.namegroupsize
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        addAttributeItem: function () {
            axios
                .post("/admin/attributeitem", {
                    id: this.selectattributeitem,
                    name: this.nameattributeitem
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        addattribute: function () {
            axios
                .post("/admin/attribute", {
                    id: this.selectattribute,
                    name: this.nameattribute
                })
                .then(response => {
                    this.attrTitle.push({
                        name: response.data.name,
                        id: response.data.id
                    });
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        addgroup: function () {
            axios
                .post("/admin/attributegroup", {
                    id: this.selectgroup,
                    name: this.namegroup
                })
                .then(response => {
                    this.groupsz.push({
                        name: response.data.name,
                        id: response.data.id
                    });

                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addSize: function () {
            axios
                .post("/admin/addsize", {
                    id: this.size_id
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });

            var btn = document.getElementById("addSize");
            btn.innerHTML = "در حال ارسال";
            setTimeout(function () {
                btn.innerHTML = "ارسال";
            }, 3000);
        },
        addAttribute: function () {
            axios
                .post("/admin/addattr", {
                    id: this.attr_id
                })
                .then(function (response) {
                    console.log(response);
                    alert(1);
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
            var btn = document.getElementById("addAttribute");
            btn.innerHTML = "در حال ارسال";
            setTimeout(function () {
                btn.innerHTML = "ارسال";
            }, 3000);
        },
        addValueAttribute: function () {
            axios
                .post("/admin/addattritem", {
                    id: this.attrItem_id
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
            var btn = document.getElementById("addValueAttribute");
            btn.innerHTML = "در حال ارسال";
            setTimeout(function () {
                btn.innerHTML = "ارسال";
            }, 3000);
        },
        addBrand: function () {
            axios
                .post("/admin/addbrand", {
                    id: this.brand_id
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                });
            var btn = document.getElementById("addBrand");
            btn.innerHTML = "در حال ارسال";
            setTimeout(function () {
                btn.innerHTML = "ارسال";
            }, 3000);
        },
        BOZ: function () {
            if (this.errorsName) {
                return "form-control is-invalid";
            } else {
                return "form-control is-valid";
            }
        },
        BOZ2: function () {
            if (this.errorsId) {
                return "custom-select is-invalid";
            } else {
                return "custom-select is-valid";
            }
        },
        category: function () {
            Axios.post("/admin/category", {
                id: this.select,
                name: this.categoryname
            })
                .then(response => {
                    this.errorsId = null;
                    this.errorsName = null;

                    this.categories.push({
                        name: response.data.name,
                        id: response.data.id
                    });

                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );
                })
                .catch(error => {
                    // this.errors.push({
                    //     id: error.response.data.errors.id,
                    //     name: error.response.data.errors.name
                    // });
                    this.errorsId = error.response.data.errors.id;
                    this.errorsName = error.response.data.errors.name;
                });
        },
        delcategory: function () {
            axios
                .delete(`/admin/category/${this.select1}`, {
                    params: {
                        id: this.select1
                    },
                    id: this.select1
                })
                .then(function (response) {
                    app.SweetAlertToast(
                        "عملیات با موفقیت انجام شد!",
                        "success"
                    );

                    location.reload();
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
});
