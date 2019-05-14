@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main">

    <div class="col-sm-offset-3 col-sm-6">

        <form action="{{ route('users.postAdd') }}" method="POST" role="form" style="margin-top: 100px">

            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if($message = Session::get('failed'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <legend>Create a new user</legend>

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Nhập tên của bạn..." title="Tên đầy đủ">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="yourname@gmail.com" title="Địa chỉ email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu..." title="Mật khẩu">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ của bạn..." title="Địa chỉ">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="(+84) 915 981 110" title="Số điện thoại">
            </div>

            <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
        </form>

    </div>

</div>

@endsection