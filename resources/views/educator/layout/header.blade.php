<div class="menu">
    <div class="row">
        <div class="col-md-12">
            <div class="topnav">
                <a class="active" href="{{ route('edu-page') }}">Thông tin phòng</a>
                <a href="{{ route('kitchen-page') }}">Tình trang bếp</a>
                <a href="{{ route('water&electrics') }}">Điện nước</a>
                <a href="{{ route('misconduct') }}">Lỗi vi phạm</a>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Tìm kiếm.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>


</div>