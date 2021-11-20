// $( document ).ready(function() {
//     console.log( "ready!" );
//     function status(id,that){
//         $.ajax({
//                 url: 'http://127.0.0.1:8000/api/status',
//                 type: "POST",
//                 data: {id},
//                 datatype: 'JSON',
//                 success: function(res){
//                     console.log(res.status);
//                     if(res.status==201){
//                         that.css({backgroundColor: 'red' });
//                     }
//                 }
//             }
//         )
//     }
// });
//


    $.ajax({
            url: 'http://127.0.0.1:8000/api/status',
            type: "POST",
            data: {id},
            datatype: 'JSON',
            success: function(res){
                console.log(res);
                if(res.status==2){
                    that.style.backgroundColor = "red";
                    return confirm('Bạn có muốn cho thuê phòng này ?')
                }else if(res.status==1) {
                    that.style.backgroundColor = "green";
                    return confirm('Bạn có muốn trả phòng này ?')
                }
            }
        }
    )
}
