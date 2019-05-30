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
    <link rel="stylesheet" href="public/css/custom/style.css">

</head>

<body>

    <div id="change-password-form" class="row">

        <div class="col-sm-offset-4 col-sm-4 col-xs-offset-1 col-xs-10">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>QUÊN MẬT KHẨU</strong>
                </div>
                <div class="panel-body">

                    <!-- START VALIDATION LOGIN MESSAGE -->

                    <div class="alert alert-danger error errorLogin" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p style="color:red; display:none;" class="error errorLogin"></p>
                    </div>

                    <!-- END VALIDATION LOGIN MESSAGE -->

                    <form action="send-verify-code" method="POST" role="form">

                        {{ csrf_field() }}

                        <div class="col-xs-12">
                            <div class="form-group">
                                <p class="text-danger error errorEmail"></p>
                                <input type="email" class="form-control" name="email" placeholder="Nhập email của bạn">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" style="display: none" id="verify-code" minlength="6" maxlength="6" placeholder="Nhập mã xác nhận">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary col-xs-12 text-uppercase" style="display: none" id="btn-verify">Xác nhận</button>
                            </div>
                        </div>

                        <div style="display: none" id="time-regetcode" class="col-xs-12">
                            <p>Chờ <span id="countdown-timer"></span>s nữa để lấy lại mã.</p>
                        </div>

                        <div class="col-xs-12">
                            <button type="submit" id="btn-getcode" onclick="getVirifyCode()" class="btn btn-primary col-xs-12 text-uppercase">Lấy mã xác nhận</button>
                        </div>
                    </form>
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

        function getVirifyCode() {
            $.ajax({
                url: 'send-verify-code',
                method: 'POST',
                data: {
                    'email': $('#email').val()
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    afterSendVirifyCode()
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
    </script>
</body>

</html>