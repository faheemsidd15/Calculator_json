
/*$('.add').on('submit', function () {

    var that = $(this),
        contents = that.serialize();


    $.ajax({
        url: 'addPhp.php',
        dataType: 'json',
        type: 'post',
        data: contents,
        success: function (data) {

            console.log("hello");

        }
    });

});*/


function onSuccess(data, status)
{
    /*data = $.trim(data);
    $("#notification").html(data);*/
// console.log(data);

console.log(data);

    if (data.success){

        alert('The result is ' + data.result);
    }

}

function onError(data, status)
{
    // handle an error
}

$(document).ready(function() {
    $("#submit").click(function(){

        var formData = $("#callAjaxForm").serialize();
        $.ajax({
            type: "POST",
            url: "addPhp.php",
            dataType: 'json',
            cache: false,
            data: formData,
            success: onSuccess,
            error: onError



        });

        return false;

    });
});