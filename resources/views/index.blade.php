<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <base href="{{ asset('') }}">

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/custom/style.css">

</head>

<body>

    <header id="header">
        <div class="header-center">
            <div id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 left text-center">
                            <a href="">
                                <img src="public/images/logo.jpg" width="130">
                            </a>
                        </div>
                        <div class="col-sm-5 center">

                        </div>
                        <div class="col-sm-4 right">
                            <ul class="list-inline">
                                <li><a href="#">Đăng nhập</a></li>
                                <li><a href="#">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-hr">
                <div class="container-fruid">
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="dropdown">

                                </div>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav text-uppercase">
                                    <li class="active"><a href="">Trang Chủ</a></li>
                                    <li><a href="">Giới Thiệu</a></li>
                                    <li><a href="">Liên Hệ</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <form method="POST" action="search.php" class="navbar-form">
                                            <div class="input-group search-box">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                                <span class="input-group-addon btn btn-primary">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section id="main-content">

        <div id="slider">

            <div class="container-fruid">
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <!-- <li data-target="#carousel-id" data-slide-to="2" class=""></li> -->
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="First slide" src="public/images/slide1.jpg" width="100%" height="500px">
                            <div class="container">
                                <div class="carousel-caption">
                                    <!-- <h1>Example headline.</h1>
                                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="First slide" src="public/images/slide2.jpg" width="100%" height="500px">
                            <div class="container">
                                <div class="carousel-caption">
                                    <!-- <h1>Another example headline.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>

        </div> <!-- #slider -->

        <div class="space-50"></div>

        <div id="values">
            <div class="container">
                <h3>Những giá trị của chúng tôi</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="public/images/trust.jpg" alt="trust" width="100%" title="Tin tưởng">
                    </div>
                    <div class="col-sm-4">
                        <img src="public/images/responsibility.jpg" alt="responsibility" width="100%" title="Trách nhiệm">
                    </div>
                    <div class="col-sm-4">
                        <img src="public/images/solidarity.jpg" alt="solidarity" width="100%" title="Đoàn kết">
                    </div>
                    <div class="col-sm-offset-2 col-sm-4">
                        <img src="public/images/respect.jpg" alt="respect" width="100%" title="Tôn trọng">
                    </div>
                    <div class="col-sm-4">
                        <img src="public/images/demand.jpg" alt="demand" width="100%" title="Đề cao">
                    </div>
                </div>
            </div>
        </div> <!-- #values -->

    </section>

    <div class="space-50"></div>

    <i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>

    <footer>
        <div class="before-footer">

        </div>
        <div class="footer">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <h4>GIỚI THIỆU</h4>
                    <hr>
                    <p class="title">PASSERELLES NUMERIQUES VIETNAM</p>
                    <p class="title">Địa chỉ: </p>
                    <a href="https://www.google.com/maps/place/99+T%C3%B4+Hi%E1%BA%BFn+Th%C3%A0nh,+Ph%C6%B0%E1%BB%9Bc+M%E1%BB%B9,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vietnam/@16.0597632,108.2414633,17z/data=!3m1!4b1!4m5!3m4!1s0x3142177f2ced6d8b:0xeac35f2960ca74a4!8m2!3d16.0597966!4d108.2434978" target="_blank">
                        <span>99 Tô Hiến Thành, Sơn Trà, Đà Nẵng</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <h4>ĐỊA CHỈ LIÊN HỆ</h4>
                    <hr>
                    <p class="title">Liên hệ với chúng tôi </p>
                    <p><a href="mailto:ngoctai.dev@gmail.com"><span><i class="fa fa-envelope-o "></i></span> ngoctai.dev@gmail.com</a></p>
                    <p><a href="tel:(+84) 348 543 343"><span><i class="fa fa-address-card "></i></span> (+84) 348 543 343</a></p> <br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <h4>MẠNG XÃ HỘI</h4>
                    <hr>
                    <p class="title">Facebook:</p>
                    <p class="title">Youtube:</p>
                    <p class="title">Google+:</p>
                </div>
            </div>
        </div>

    </footer> <!-- #footer -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Scrollable -->
    <script>
        $(window).scroll(function(event) {
            if ($(document).scrollTop() > $("#menu-hr").scrollTop() + 100) {
                $("#menu-hr").addClass("sticky");
            } else {
                $("#menu-hr").removeClass("sticky");
            }

            if ($(document).scrollTop() > 500) {
                $('#scroll-top').fadeIn("slow");
            } else {
                $('#scroll-top').fadeOut("slow");
            }
        });

        $("#scroll-top").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
    </script>

</body>

</html>