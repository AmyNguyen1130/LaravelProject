// CONTROL LOGIN/ SIGNUP
function loginControl() {
    $('#login-form').addClass('active');
    $('#login-form').addClass('in');
    $('#signup-form').removeClass('active');
    $('#signup-form').removeClass('in');
    $('#login-title').addClass('active');
    $('#signup-title').removeClass('active');
    $('#login-modal').show();
}

function signupControl() {
    $('#login-form').removeClass('active');
    $('#login-form').removeClass('in');
    $('#signup-form').addClass('active');
    $('#signup-form').addClass('in');
    $('#login-title').removeClass('active');
    $('#signup-title').addClass('active');
    $('#login-modal').show();
}

$(document).ready(function () {
    $('#btn-login').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'login',
            'data': {
                'email': $('#email').val(),
                'password': $('#password').val(),
                'remember': $('#remember').val(),
                '_token': $(this).data('token')
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.errorlogin != undefined) {
                        $('.errorLogin').show().text(data.message.errorlogin[0]);
                    }
                } else {
                    window.location.replace("http://localhost/LaravelProject/");
                }
            }
        });
    })


});





// // SIGNUP PROGRESS
// SEND REPORT

// $('#btn-report').click(function (e) {
//     e.preventDefault();
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         'type': 'POST',
//         'url': 'student/sendReport',
//         'data': {
//             'content': $('#content').val(),
//             'room': $('#room').val()
//         },
//         'dataType': 'json',
//         success: function (data) {
//             console.log(data);
//             window.location.replace("http://localhost/LaravelProject/student/issue");
//         }
//     });
// })

$(document).ready(function () {
    $("#month_water").change(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'student/getWaterByMonth',
            'data': {
                'month_water': $('#month_water').val()
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                $("#table_water tbody").html(data)
                tableData()
            },
            error: function () {
                console.log('Lỗi')
            }
        });
    });
});