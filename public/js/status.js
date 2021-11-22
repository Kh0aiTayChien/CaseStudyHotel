


function status(id, that) {
    $.ajax({
            url: 'http://127.0.0.1:8000/api/status',
            type: "POST",
            data: {id},
            datatype: 'JSON',
            success: function (res) {
                console.log(res);
             if (res.status == 2) {
                   if ( confirm('Bạn có muốn cho thuê phòng này ?')== true)
                    that.style.backgroundColor = "red";


                } else if (res.status == 1) {
                   if( confirm('Bạn có muốn trả phòng này ?') == true )
                    that.style.backgroundColor = "green";

                }
            }
        }
    )
}


    $(".card1").css({'background': 'green'})
    $(".card2").css({'background': 'red'})
    $(".card3").css({'background': 'purple'})



    $(".type1").text("Phòng Đơn");
    $(".type2").text('Phòng Đôi');
    $(".type3").text('Phòng Vip');


