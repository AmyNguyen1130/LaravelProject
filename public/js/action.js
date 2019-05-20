// FUNCTIONS
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

function moveToStep2(student) {
    $('#name').val(student.name);
    $('#gender').val(student.gender);
    $('#birthday').val(student.birthday);
    $('#phone').val(student.phone);
}

// LOGIN AJAX
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
                    window.location.replace("http://localhost/LaravelProject/" + data.role);
                }
            }
        });
    })


});

// // SIGNUP AJAX
$(document).ready(function () {
    $('#btn-next').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'signup/step-1',
            'data': {
                'email': $('#signup-email').val(),
                'password': $('#signup-password').val(),
                '_token': $(this).data('token')
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.email != undefined) {
                        $('.errorSignupEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorSignupPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.errorSignup != undefined) {
                        $('.errorSignup').show().text(data.message.errorSignup[0]);
                    }
                } else {
                    moveToStep2(data.student);
                    $('#signup-form-step1').removeClass('show');
                    $('#signup-form-step1').addClass('hide');
                    $('#signup-form-step2').addClass('show');
                    $('#signup-form-step2').removeClass('hide');
                }
            }
        });

    });

    $('#btn-previous').click(function () {
        $('#signup-form-step2').removeClass('show');
        $('#signup-form-step2').addClass('hide');
        $('#signup-form-step1').addClass('show');
        $('#signup-form-step1').removeClass('hide');
    });

    $('#btn-signup').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'POST',
            'url': 'signup/step-2',
            'data': {
                'email': $('#signup-email').val(),
                'password': $('#signup-password').val(),
                'name': $('#name').val(),
                'gender': $('#gender').val(),
                'birthday': $('#birthday').val(),
                'phone': $('#phone').val(),
                '_token': $(this).data('token')
            },
            'dataType': 'json',
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.name != undefined) {
                        $('.errorSignupName').show().text(data.message.name[0]);
                    }
                    if (data.message.birthday != undefined) {
                        $('.errorSignupBirthday').show().text(data.message.birthday[0]);
                    }
                    if (data.message.phone != undefined) {
                        $('.errorSignupPhone').show().text(data.message.phone[0]);
                    }
                    if (data.message.errorSignup != undefined) {
                        $('.errorSignupStep2').show().text(data.message.errorSignup[0]);
                    }
                } else {
                    window.location.replace("http://localhost/LaravelProject/student");
                }
            }
        });
    });
});

// SEND REPORT
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