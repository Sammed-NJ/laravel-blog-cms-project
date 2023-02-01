$(document).ready(function () {


    let submit = $("#submit")
    submit.attr("disabled", true)


    let title = $("#title")
    let content = $("#content")
    // let postImg = $("#post-img")
    $(content, title).on('input', function () {


        if (!$.trim(title.val()) && !$.trim(content.val())) {
            submit.attr("disabled", true)

        } else {
            submit.attr("disabled", false)

        }


    });



    let titleEdit = $("#title-edit")
    let contentEdit = $("#content-edit")
    $(titleEdit, contentEdit).on('input', function () {


        if (!$.trim(titleEdit.val()) && !$.trim(contentEdit.val())) {
            submit.attr("disabled", true)

        } else {
            submit.attr("disabled", false)

        }


    });


})


