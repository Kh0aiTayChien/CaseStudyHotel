$( document ).ready(function() {
    console.log( "ready!" );
    function status(id,that){
        $.ajax({
                url: 'http://127.0.0.1:8000/api/status',
                type: "POST",
                data: {id},
                datatype: 'JSON',
                success: function(res){
                    console.log(res.status);
                    if(res.status==201){
                        that.css({backgroundColor: 'red' });
                    }
                }
            }
        )
    }
});

