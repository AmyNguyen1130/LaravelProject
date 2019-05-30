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
                            <li><a class="{{ Auth::check() ? 'hide' : 'show' }}" onclick="loginControl()">Đăng nhập</a></li>
                            <li><a class="{{ Auth::check() ? 'hide' : 'show' }}" onclick="signupControl()">Đăng ký</a></li>
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
                            <ul id="collapse-menu" class="nav list-inline">
                                <li class="text-uppercase {{ Auth::check() ? 'hide' : 'show' }}"><a onclick="loginControl()">Đăng nhập</a></li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav text-uppercase">
                                <li class=" {{Request::is('student') ? 'active' : ''}}"><a href="student">Trang Chủ</a></li>
                                <li class=" {{Request::is('student/issue') ? 'active' : ''}}"><a href="student/issue">Đồ Hỏng</a></li>
                                <li class=" {{Request::is('student/waterElectricBill') ? 'active' : ''}}"><a href="student/waterElectricBill">Điện nước</a></li>
                                <li class=" {{Request::is('student/kitchenExpenses') ? 'active' : ''}}"><a href="student/kitchenExpenses">Chi Tiêu Bếp</a></li>
                                <li class=" {{Request::is('student/misconduct') ? 'active' : ''}}"><a href="student/misconduct">Vi Phạm</a></li>
                                <li class="dropdown {{ Auth::check() ? 'show' : 'hide' }}">
                                    <a href="" data-toggle="dropdown">Tài khoản <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="change-password"><i class="fa fa-cogs"></i> Đổi mật khẩu</a></li>
                                        <li><a href="logout"><i class="fa fa-sign-out"></i> Đăng Xuất</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul id="nav-right" class="nav navbar-nav navbar-right">
                                <li>
                                    <form method="POST" action="" class="navbar-form">
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