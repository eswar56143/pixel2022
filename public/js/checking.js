function userAvailability() {
    let email = $("#email").val();
    $.ajax({
        type:'POST',
        url: '{{ route("emailCheck") }}',
        datatype: 'json',
        data : {
            '_token' : '{{csrf_token()}}',
            'email': email,
        },
        success: function(result){
            $("#user-availability-status1").html(result);
        },
    });
}
