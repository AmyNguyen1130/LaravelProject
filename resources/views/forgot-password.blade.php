<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Quên mật khấu | Dorm Management</title>
    <base href="{{ asset('') }}">

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <style>
        #change-password-form {
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>

<body>

    <div id="change-password-form" class="row">

        <div class="col-xs-offset-1 col-xs-10">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>QUÊN MẬT KHẨU</strong>
                </div>
                <div class="panel-body">

                    <div id="get-code" style="display: {{ Cookie::get('verifyCode') == 'verified' ? 'none' : 'block' }}">
                        <!-- START VALIDATION GETCODE MESSAGE -->

                        <div class="col-xs-12">
                            <div class="alert alert-success error getCodeSuccess" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p style="color: #ffffff; display:none;" class="error getCodeSuccess"></p>
                            </div>
                            <div class="alert alert-danger error getCodeError" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p style="color:red; display:none;" class="error getCodeError"></p>
                            </div>
                            <div class="alert alert-danger error emailError" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p style="color:red; display:none;" class="error emailError"></p>
                            </div>
                        </div>

                        <!-- END VALIDATION GETCODE MESSAGE -->

                        <!-- START VALIDATION VERIFY CODE MESSAGE -->

                        <div class="col-xs-12">
                            <div class="alert alert-danger error verifyCodeMessage" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p style="color: red; display:none;" class="error verifyCodeMessage"></p>
                            </div>
                        </div>

                        <!-- END VALIDATION GETCODE MESSAGE -->

                        <form action="send-verify-code" method="POST" role="form">

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" onclick="$('.emailError').fadeOut()" id="email" placeholder="Nhập email của bạn">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" style="display: none" onkeyup="$('.error').fadeOut()" id="verify-code" minlength="6" maxlength="6" placeholder="Nhập mã xác nhận">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <button type="button" onclick="verifyCode()" class="btn btn-primary col-xs-12 text-uppercase" style="display: none" id="btn-verify" disabled>Xác nhận</button>
                                </div>
                            </div>

                            <div style="display: none" id="time-regetcode" class="col-xs-12">
                                <p>Chờ <span id="countdown-timer"></span>s nữa để lấy lại mã.</p>
                            </div>

                            <div class="col-xs-12">
                                <button type="button" id="btn-getcode" onclick="getVirifyCode()" class="btn btn-primary col-xs-12 text-uppercase">Lấy mã xác nhận</button>
                            </div>
                        </form>
                    </div>

                    <div id="reset-password" style="display: {{ (Cookie::has('verifyCode') && Cookie::get('verifyCode') == 'verified') ? 'block' : 'none' }}">

                        <!-- START VALIDATION RESET PASSWORD MESSAGE -->

                        <div class="col-xs-12">
                            <div class="alert alert-danger error resetPasswordMessage" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p style="color: red; display:none;" class="error resetPasswordMessage"></p>
                            </div>
                        </div>

                        <!-- END VALIDATION RESET PASSWORD MESSAGE -->

                        <form action="reset-password" method="POST" role="form">

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" onkeyup="$('.error').fadeOut()" id="new-password" placeholder="Nhập mật khẩu mới">
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" onkeyup="$('.error').fadeOut()" id="new-password-repeat" placeholder="Nhập lại mật khẩu">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <a href="" class="btn btn-default col-xs-12 text-uppercase">Hủy</a>
                            </div>

                            <div class="col-xs-6">
                                <button type="button" id="reset" onclick="resetPassword()" class="btn btn-primary col-xs-12 text-uppercase">Thay Đổi</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#verify-code').keyup(function() {
            checkCodeLength()
        });

        function getVirifyCode() {
            $.ajax({
                url: 'send-verify-code',
                method: 'POST',
                data: {
                    'email': $('#email').val()
                },
                dataType: 'json',
                success: function(data) {
                    $('.error').hide();
                    if (data.is_valid == false) {
                        if (data.message.email != undefined) {
                            $('.emailError').show().text(data.message.email[0]);
                        }
                    } else if (data.error == true) {
                        $('.emailError').show().text(data.message);
                    } else {
                        $('.getCodeSuccess').show().text(data.message);
                        afterSendVirifyCode();
                    }
                }
            })
        }

        function afterSendVirifyCode() {

            $('#verify-code').fadeIn();
            $('#btn-verify').fadeIn();
            $('#btn-getcode').prop('disabled', true);
            $('#time-regetcode').show();

            $('#countdown-timer').html(60);
            startTimer();
            $('#btn-getcode').html('Gửi lại');

            function startTimer() {
                var s = $('#countdown-timer').html() - 1;
                $('#countdown-timer').html(s);

                var timer = setTimeout(startTimer, 1000);

                if (s == 0) {
                    clearTimeout(timer);
                    $('#btn-getcode').prop('disabled', false);
                    $('#time-regetcode').fadeOut();
                }
            }
        }

        function checkCodeLength() {
            if ($('#verify-code').val().length == 6) {
                $('#btn-verify').attr('disabled', false);
                verifyCode();
            } else {
                $('#btn-verify').attr('disabled', true);
            }
        }

        function verifyCode() {
            $.ajax({
                url: 'verify-code',
                method: 'POST',
                data: {
                    'code': $('#verify-code').val()
                },
                dataType: 'json',
                success: function(data) {
                    $('.error').hide();
                    if (data.error == true) {
                        $('.verifyCodeMessage').show().text(data.message);
                    } else {
                        $('#get-code').hide();
                        $('#reset-password').fadeIn();
                    }
                }
            })
        }

        function checkPassword() {
            if ($('#new-password').val().length >= 8 && $('#new-password-repeat').val().length >= 8) {
                if ($('#new-password').val() === $('#new-password-repeat').val()) {
                    $('#reset').attr('disabled', false);
                    return true;
                } else {
                    $('.resetPasswordMessage').show().text("Mật khẩu không khớp, vui lòng nhập lại");
                    $('#new-password-repeat').focus();
                    return false;
                }
            } else {
                $('.resetPasswordMessage').show().text("Mật khẩu phải chứa ít nhất 8 kí tự");
            }
        }

        function resetPassword() {
            if (checkPassword()) {
                $.ajax({
                    url: 'reset-password',
                    method: 'POST',
                    data: {
                        'email': $('#email').val(),
                        'password': $('#new-password').val(),
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('.error').hide();
                        if (data.error == true) {
                            $('.resetPasswordMessage').show().text(data.message);
                            setTimeout(function() {
                                window.location.replace('');
                            }, 2000);
                        } else {
                            $('.resetPasswordMessage').show().text(data.message);
                        }
                    }
                })
            }
        }
    </script>
</body>

</html>