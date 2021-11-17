$(document).ready(function () {
    $('#login').on('click',function (){
        var email = $('#email').val()
        var password = $('#password').val()

        $.ajax({

            url:"http://127.0.0.1:8000/api/login",
            type: 'POST',
            data: {email,password},
            dataType: "JSON",
            success: function (response) {
                    console.log(response);

            }

        })

        }
    )
})



