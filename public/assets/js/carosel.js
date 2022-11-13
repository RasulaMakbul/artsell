$(document).ready(function () {
    //alert('working');
    $(document).on("click", ".add_carosel", function (e) {
        e.preventDefault();
        let title = $("#title").val();
        let link = $("#link").val();
        let description = $("#description").val();
        let image = $("#image").val();
        // console.log(name + price);
        $.ajax({
            url: "{{route('admin.storeCarosel')}}",
            method: "post",
            data: {
                title: title,
                link: link,
                description: description,
                image: image,
            },
            success: function (res) {
                if (res.status == "success") {
                    $("#addCaroselModal").modal("hide");
                    $("#addCaroselForm")[0].reset();
                    $(".table").load(location.href + " .table");
                    Command: toastr["success"](
                        "Carosel Added Successfully",
                        "Success"
                    );

                    toastr.options = {
                        closeButton: true,
                        debug: false,
                        newestOnTop: false,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        preventDuplicates: false,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        timeOut: "5000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                    };
                }
            },
            error: function (err) {
                let error = err.responseJSON;
                $.each(error.errors, function (index, value) {
                    $(".errorMsgContainer").append(
                        '<span class="text-danger">' +
                            value +
                            "</span>" +
                            "<br>"
                    );
                });
            },
        });
    });
});
