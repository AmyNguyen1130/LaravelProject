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
    <link rel="stylesheet" href="public/css/custom/index.css">

    <!-- Font-Awesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header id="header">
        <div class="container-fruid">

            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">
                            <img src="public/images/logo.jpg" alt="logo" width="100px">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <!-- <li>KÍ TÚC XÁ LÀ NHÀ - BẠN BÈ LÀ ANH EM</li> -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Đăng nhập</a></li>
                            <li><a href="#">Đăng ký</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>

            <!-- <div class="row">
                <div class="col-sm-3 text-center">
                    <a href=""><img src="public/images/header-logo.jpg" class="img-circle" width="100px" alt="banner"></a>
                </div>
                <div class="col-sm-6" id="sologan">
                    <h3>KÍ TÚC XÁ LÀ NHÀ - BẠN BÈ LÀ ANH EM</h3>
                </div>
                <div class="col-sm-3 text-center">
                    <button class="btn btn-primary">Đăng nhập</button>
                    <button class="btn btn-default">Đăng ký</button>
                </div>
            </div> -->
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
                    <p class="title">Địa chỉ: </p><span>99 Tô Hiến Thành, Sơn Trà, Đà Nẵng</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <h4>ĐỊA CHỈ LIÊN HỆ</h4>
                    <hr>
                    <p class="title">Liên hệ với chúng tôi </p>
                    <p><a href="#"><span><i class="fa fa-phone"></i></span> 0348 543 343 </a></p>
                    <p><a href="#"><span><i class="fa fa-envelope-o "></i></span> contactpnv@gmail.com</a></p>
                    <p><a href="#"><span><i class="fa fa-address-card "></i></span> +84 348 543 343</a></p> <br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <h4>MẠNG XÃ HỘI</h4>
                    <hr>
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
        var lastScrollTop = 0;

        $(window).scroll(function(event) {
            var scrollTop = $(this).scrollTop();

            if ($(document).scrollTop() > 150) {
                if (scrollTop > lastScrollTop) {
                    $("#header").fadeOut("slow");
                } else {
                    $("#header").fadeIn();
                }
                lastScrollTop = scrollTop;
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