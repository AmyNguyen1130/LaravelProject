<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>


    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <form action="testlogin" method="POST" role="form">
                <legend>Form title</legend>
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" id="email" placeholder="Nhập email">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Nhập password">
                </div>

                <div class="form-group">
                    <input type="checkbox" id="remember" {{ Cookie::has('remember') ? "checked" : "" }}> Lưu tài khoản
                </div>

                <button type="button" id="login" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $('#login').click(function(e) {
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
                    'password': $('#password').val()
                },
                'dataType': 'json',
                success: function(data) {
                    console.log(data.user);
                    // if (data.error == true) {
                    //     $('.error').hide();
                    //     if (data.message.email != undefined) {
                    //         $('.errorEmail').show().text(data.message.email[0]);
                    //     }
                    //     if (data.message.password != undefined) {
                    //         $('.errorPassword').show().text(data.message.password[0]);
                    //     }
                    //     if (data.message.errorlogin != undefined) {
                    //         $('.errorLogin').show().text(data.message.errorlogin[0]);
                    //     }
                    // } else {
                    //     window.location.replace("http://localhost/LaravelProject/" + data.role);
                    // }
                },
                error: function() {
                    console.log(data.message)
                }
            });
        })
    </script>
</body>

</html>