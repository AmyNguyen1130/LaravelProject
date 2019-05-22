<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="public/css/custom/educator.css">
    <link rel="stylesheet" href="public/css/custom/index.css">
    <!-- <link rel="stylesheet" href="public/css/app.css"> -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Educator</title>
</head>

<body>
    <div class="container">
        <div class="menu">
            <ul class="nav nav-tabs">
                <li class="active"><a href="educator.php">Thông Tin Phòng</a></li>
                <li><a href="{{ rout('kitchen_status')  }}" class="menu-con">Tình Trạng Bếp</a></li>
                <li><a href="#" class="menu-con">Điện Nước</a></li>
                <li><a href="#" class="menu-con">Lỗi Vi Phạm</a></li>
            </ul>
            <br>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="menu-vertical">
                            <ul role="tablist" class="nav">
                                <li class="active">
                                    <a href="#room-102" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 102</a>
                                </li>
                                <li class="active">
                                    <a href="#room-206" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 206</a>
                                </li>
                                <li class="active">
                                    <a href="#room-207" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 207</a>
                                </li>
                                <li class="active">
                                    <a href="#room-208" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 208</a>
                                </li>
                                <li class="active">
                                    <a href="#room-209" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 209</a>
                                </li>
                                <li class="active">
                                    <a href="#room-210" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 210</a>
                                </li>
                                <li class="active">
                                    <a href="#room-211" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 211</a>
                                </li>
                                <li class="active">
                                    <a href="#room-212" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 212</a>
                                </li>
                                <li class="active">
                                    <a href="#room-306" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 306</a>
                                </li>
                                <li class="active">
                                    <a href="#room-307" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 307</a>
                                </li>
                                <li class="active">
                                    <a href="#room-308" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 308</a>
                                </li>
                                <li class="active">
                                    <a href="#room-309" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 309</a>
                                </li>
                                <li class="active">
                                    <a href="#room-310" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 310</a>
                                </li>
                                <li class="active">
                                    <a href="#room-406" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 406</a>
                                </li>
                                <li class="active">
                                    <a href="#room-407" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 407</a>
                                </li>
                                <li class="active">
                                    <a href="#room-408" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 408</a>
                                </li>
                                <li class="active">
                                    <a href="#room-409" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng 409</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active in" id="room-206">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="room-info">
                                        <h3>Thông Tin Phòng</h3>
                                        <hr width="85%">
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <a class="btn" style="color:coral;">Room ID</a>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <a class="btn" style="color:coral;">Name Room</a>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <a class="btn" style="color:coral;">Floor</a>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <a class="btn" style="color:coral;">Member</a>
                                            </div>
                                        </div>
                                        <hr width="85%">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    </div>


</body>

</html>