@extends('student.layout.master')

@section('main-content')

<section id="main-content">


    <div id="login-modal" class="modal">

        <div class="modal-content animate">
            <div class="header-modal">
                <span onclick="$('#login-modal').fadeOut('slow');" class="close" title="Close">&times;</span>
            </div>

            <div class="text-center">
                <ul role="tablist" class="list-inline">
                    <li id="login-title" class="active text-uppercase">
                        <a href="#login-form" data-toggle="tab" aria-expanded="false">Đăng Nhập</a>
                    </li>
                    <li id="signup-title" class="text-uppercase">
                        <a href="#signup-form" data-toggle="tab" aria-expanded="false">Đăng Ký</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div class="tab-pane active in" id="login-form">
                    <div class="form">
                        <!-- START VALIDATION LOGIN MESSAGE -->

                        <div class="alert alert-danger error errorLogin" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p style="color:red; display:none;" class="error errorLogin"></p>
                        </div>

                        <!-- END VALIDATION LOGIN MESSAGE -->

                        <form action="login" method="POST">
                            <legend></legend>
                            <!-- {{ csrf_field() }} -->
                            <div class="form-group">
                                <input type="email" class="form-control" onclick="$('.errorEmail').fadeOut()" id="email" placeholder="Địa chỉ email..." value="{{old('email')}}" required>
                                <p class="text-danger error errorEmail"></p>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" onclick="$('.errorPassword').fadeOut()" id="password" placeholder="Mật khẩu..." value="" required>
                                <p class="text-danger error errorPassword"></p>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="remember"> Ghi nhớ mật khẩu
                            </div>

                            <div class="form-group">
                                <p>Bạn <a style="color: #FFFFFF; text-decoration: none" href="#signup-form" onclick="signupControl()">chưa có tài khoản</a> hoặc <a style="color: #FFFFFF; text-decoration: none" href="forgot-password">quên mật khẩu</a>?</p>
                            </div>

                            <button type="button" id="btn-login" class="btn btn-primary col-xs-12">Đăng Nhập</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="signup-form">
                    <div class="form">
                        <form method="post" novalidate>
                            <div id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active">Account Setup</li>
                                    <li>Social Profiles</li>
                                    <li>Personal Details</li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <h2 class="fs-title">Create your account</h2>
                                    <h3 class="fs-subtitle">This is step 1</h3>
                                    <input type="text" name="email" placeholder="Email" />
                                    <input type="password" name="pass" placeholder="Password" />
                                    <input type="password" name="cpass" placeholder="Confirm Password" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <h2 class="fs-title">Social Profiles</h2>
                                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                                    <input type="text" name="twitter" placeholder="Twitter" />
                                    <input type="text" name="facebook" placeholder="Facebook" />
                                    <input type="text" name="gplus" placeholder="Google Plus" />
                                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <h2 class="fs-title">Personal Detail</h2>
                                    <h3 class="fs-subtitle">We will never sell it</h3>
                                    <input type="text" name="fname" placeholder="First Name" />
                                    <input type="text" name="lname" placeholder="Last Name" />
                                    <input type="text" name="phone" placeholder="Phone" />
                                    <textarea name="address" placeholder="Address"></textarea>
                                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

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

@endsection