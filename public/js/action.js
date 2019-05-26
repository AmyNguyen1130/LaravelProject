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

// INSERT NEW RECORD TABLE ELECTRICS
function changeMonthByYear() {
    var today = new Date();
    var months = "<option selected disabled>Tháng</option>";
    if (today.getFullYear() == $('#insert_year').val()) {
        var today = new Date();
        for (var month = 1; month <= today.getMonth(); month++) {
            months += "<option value='" + month + "'>" + month + "</option>/n"
        }
    } else {
        for (var month = 1; month <= 12; month++) {
            months += "<option value='" + month + "'>" + month + "</option>/n"
        }
    }
    $('#insert_month').html(months);
}

function getOldNumberByRoomId() {
    var today = new Date();
    var old_time = today.getFullYear() + "-" + (((today.getMonth() - 1) > 9) ? (today.getMonth() - 1) : ("0" + (today.getMonth() - 1)));
    $.ajax({
        'type': 'POST',
        'url': 'manager/tables/electrics/getOldNumber',
        'data': {
            'room_id': $('#insert_room_id').val(),
            'time': old_time,
        },
        'dataType': 'json',
        success: function (data) {
            $('#insert_old_number').val(data)
        }
    });
}

function insertIntoElectricsTable() {
    $.ajax({
        'type': 'POST',
        'url': 'manager/tables/electrics/insert',
        'data': {
            'room_id': $('#insert_room_id').val(),
            'year': $('#insert_year').val(),
            'month': $('#insert_month').val(),
            'old_number': $('#insert_old_number').val(),
            'new_number': $('#insert_new_number').val(),
            'price': $('#insert_price').val(),
            'status': $('#insert_status').val()
        },
        'dataType': 'json',
        success: function (data) {
            console.log(data);
        }
    });
}

$(document).ready(function () {

    $('#insert_year').change(function () {
        changeMonthByYear();
    });

    $('#insert_room_id').change(function () {
        getOldNumberByRoomId();
    });

    $('#save_new_electric').click(function () {
        insertIntoElectricsTable();
    });
});

// END CODE INSERT NEW RECORD

function moveToStep2(student) {
    if (student != null) {
        $('#name').val(student.name);
        $('#gender').val(student.gender);
        $('#birthday').val(student.birthday);
        $('#phone').val(student.phone);
    }
}


// LOGIN AJAX
function login() {
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
}

// addEventListener('keydown', function (event) {
//     if (event.keyCode == 13) {
//         console.log("Bắt event nhấn enter");
//     }
// });


// LOGIN
$(document).ready(function () {
    $('#btn-login').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        login();
    });
});



// SIGNUP PROGRESS
// SIGNUP AJAX
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
                'class': $('#class').val(),
                'gender': $('#gender').val(),
                'birthday': $('#birthday').val(),
                'room': $('#room').val(),
                'address': $('#address').val(),
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
                    if (data.message.address != undefined) {
                        $('.errorSignupAddress').show().text(data.message.address[0]);
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

