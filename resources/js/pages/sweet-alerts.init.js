
"use strict";
$(function () {
    var n = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-label-info btn-wide mx-1",
            denyButton: "btn btn-label-secondary btn-wide mx-1",
            cancelButton: "btn btn-label-danger btn-wide mx-1"
        },
        buttonsStyling: !1,
        // focusConfirm: !1,

    }),
        t = Swal.mixin({
            toast: !0,
            position: "top-end",
            showConfirmButton: !1,
            timer: 3e3,
            timerProgressBar: !0,
            didOpen: function (t) {
                t.addEventListener("mouseenter",
                    Swal.stopTimer),
                    t.addEventListener("mouseleave",
                        Swal.resumeTimer)
            }
        });
    $("#swal-1").on("click",
        function () {
            n.fire("Any fool can use a computer")
        }),
        $("#swal-2").on("click",
            function () {
                n.fire("The Internet?",
                    "That thing is still around?",
                    "question")
            }),
        $("#swal-3").on("click",
            function () {
                n.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="">Why do I have this issue?</a>'
                })
            }),
        $("#swal-4").on("click",
            function () {
                n.fire({
                    title: "<strong>HTML <u>example</u></strong>",
                    icon: "info", html: 'You can use <b>bold text</b>, <a href="//sweetalert2.github.io">links</a> and other HTML tags',
                    showCloseButton: !0,
                    showCancelButton: !0,
                    focusConfirm: !1,
                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                    confirmButtonAriaLabel: "Thumbs up, great!",
                    cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                    cancelButtonAriaLabel: "Thumbs down"
                })
            }),
        $("#swal-5").on("click",
            function () {
                n.fire({
                    title: "Do you want to save the changes?",
                    showDenyButton: !0,
                    showCancelButton: !0,
                    confirmButtonText: "Save",
                    denyButtonText: "Don't save"
                }).then(function (t) {
                    t.isConfirmed ? n.fire("Saved!", "", "success") : t.isDenied && n.fire("Changes are not saved", "", "info")
                })
            }),
        $("#swal-6").on("click",
            function () {
                n.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: !1,
                    timer: 1500
                })
            }),
        $("#swal-7").on("click",
            function () {
                n.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning", showCancelButton: !0,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then(function (t) {
                    t.isConfirmed && n.fire("Deleted!", "Your file has been deleted.", "success")
                })
            }), $("#swal-8").on("click", function () {
                n.fire({
                    title: "Sweet!",
                    text: "Modal with a custom image.",
                    imageUrl: "https://unsplash.it/400/200",
                    imageWidth: 400, imageHeight: 200,
                    imageAlt: "Custom image"
                })
            }),
        $("#swal-9").on("click",
            function () {
                var e; n.fire({
                    title: "Auto close alert!",
                    html: "I will close in <b></b> milliseconds.",
                    timer: 2e3, timerProgressBar: !0, didOpen: function () {
                        n.showLoading(); var t = n.getHtmlContainer().querySelector("b"); e = setInterval(function () {
                            t.textContent = n.getTimerLeft()
                        }, 100)
                    },
                    willClose: function () {
                        clearInterval(e)
                    }
                }).then(function (t) {
                    t.dismiss === n.DismissReason.timer && console.log("I was closed by the timer")
                })
            }),
        $("#swal-10").on("click", function () {
            n.fire({
                title: "Submit your Github username",
                input: "text",
                inputAttributes: { autocapitalize: "off" },
                showCancelButton: !0,
                confirmButtonText: "Look up",
                showLoaderOnConfirm: !0,
                preConfirm: function (t) {
                    return fetch("//api.github.com/users/".concat(t)).then(function (t) {
                        if (t.ok) return t.json();
                        throw new Error(t.statusText)
                    }).catch(function (t) {
                        n.showValidationMessage("Request failed: ".concat(t))
                    })
                }, allowOutsideClick: function () { return !n.isLoading() }
            }).then(function (t) {
                t.isConfirmed && n.fire({
                    title: "".concat(t.value.login, "'s avatar"),
                    imageUrl: t.value.avatar_url
                })
            })
        }), $("#swal-11").on("click", function () {
            t.fire({ icon: "success", title: "Signed in successfully" })
        })
});