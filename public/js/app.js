$(document).ready(function () {
    $.ajax({
        url: "/home",
        type: "GET",
        method: "GET",
        success: function (data) {
            console.log(data)
        }
    })
})
