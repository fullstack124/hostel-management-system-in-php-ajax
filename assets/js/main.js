$(document).ready(function () {
    // add user
    $("#add_user").on('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '/php/users/add-user.php',
            data: formData,
            dataType:'JSON',
            processData: false,
            contentType: false,
            success: (data) => {     
                if(data.success){
                    data.message.forEach(val => {
                        toastr["success"](val)
                    });
                }else{
                    data.message.forEach(val => {
                        toastr["error"](val)
                    });
                }
            }
        })
    })
});