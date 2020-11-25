$(document).ready(function() {
    $("#sidebar").click(function(e) {
        $(".sidebar").toggle(500);
        e.preventDefault();
    });
    $(document).click(function(e) {
        if (!$(e.target).closest("#sidebar, .sidebar").length) {
            $(".sidebar").hide();
        }
    });




});

Dropzone.options.urlupload = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 100, // MB
    success: function(file,response) {
        $("#myurl").val(response);
    }
};

Dropzone.options.urlImageUser = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 100, // MB
    success: function(file,response) {
        $("#urlImageUser1").val(response);
    }
};

Dropzone.options.urlImageUserEdit = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 100, // MB
    success: function(file,response) {
        $("#urlImageUser1Edit").val(response);
    }
};

