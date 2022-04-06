$(document).ready(function(){
    // alert('hi hello');
    function userAvailability(query='') {
        // $("#loaderIcon").show();
        $.ajax({
            url: "/emailCheck",
            data:{query:query},
            dataType:'json',
            type: "POST",
            success:function(data){
               alert(data);
            },
            error:function (){
                alert("error")
            }
        });
    }
    $(document).on('keyup', '#email', function(){
        let query = $(this).val();
        userAvailability(query);
    });
});
