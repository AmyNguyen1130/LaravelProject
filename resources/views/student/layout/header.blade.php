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
                            <li><a class="{{ Auth::check() ? 'show' : 'hide' }}" href="logout">Đăng Xuất</a></li>
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
                                <li class="text-uppercase {{ Auth::check() ? 'show' : 'hide' }}"><a href="logout">Đăng Xuất</a></li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav text-uppercase">
                                <li  class=" {{Request::is('student') ? 'active' : ''}}"><a href="student">Trang Chủ</a></li>
                                <li class=" {{Request::is('student/issue') ? 'active' : ''}}"><a href="student/issue">Báo Cáo Hư Hỏng</a></li>
                                <li class=" {{Request::is('student/waterElectricBill') ? 'active' : ''}}"><a href="student/waterElectricBill">Tiền điện nước</a></li>
                                <li class=" {{Request::is('student/kitchenExpenses') ? 'active' : ''}}"><a href="student/kitchenExpenses">Chi Tiêu Ở Bếp</a></li>
                                <li class=" {{Request::is('student/misconduct') ? 'active' : ''}}"><a href="student/misconduct">Danh Sách Lỗi Vi Phạm</a></li>
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