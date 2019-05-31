@extends("educator.layouts.master")

@section("educator.educator-content")

<div class="right_col" role="main">

    <div class="content">

        <div class="panel panel-default" style="margin-top: 60px">
            <div class="panel-heading" style="min-height: 53px">
                <span class="panel-title text-uppercase">Students list</span>
                <button type="button" onclick="$('#filter_electrics').fadeIn(); $('#import_excel').hide(); $('#new_electric_row').hide();" class="btn btn-default pull-right" title="Lọc"><i class="fa fa-filter fa-lg" aria-hidden="true"></i></button>
                <button type="button" onclick="$('#import_excel').fadeIn(); $('#filter_electrics').hide(); $('#new_electric_row').hide();" class="btn btn-default pull-right" title="Import từ file Excel"><i class="fa fa-upload fa-lg" aria-hidden="true"></i></button>
                <button type="button" onclick="$('#new_electric_row').fadeIn(); $('#filter_electrics').hide(); $('#import_excel').hide();" class="btn btn-default pull-right" title="Thêm 1 bản ghi"><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></button>
            </div>
            <div class="panel-body">

                <div id="new_electric_row" style="display: none">
                    <div class="alert alert-danger error" style="display: none;">
                        <button type="button" class="pull-right" onclick="$('.error').fadeOut()" style="color: red"><i class="fa fa-window-close-o fa-lg"></i> Close</button>
                        <p style="color:white; display:none;" class="roomError"></p>
                        <p style="color:white; display:none;" class="yearError"></p>
                        <p style="color:white; display:none;" class="monthError"></p>
                        <p style="color:white; display:none;" class="oldNumberError"></p>
                        <p style="color:white; display:none;" class="newNumberError"></p>
                        <p style="color:white; display:none;" class="priceError"></p>
                        <p style="color:white; display:none;" class="statusError"></p>
                    </div>
                    <div style="display: none" class="alert alert-success alert-block success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p style="color:white; display:none;" class="insertSuccess"></p>
                    </div>
                    <form action="" method="POST" role="form">

                        {{ csrf_field() }}

                        <div class="col-xs-6 col-sm-2">
                            <div class="form-group">
                                <select class="form-control" id="insert_room_id">
                                    <option selected disabled>Phòng</option>
                                    @foreach($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control" id="insert_new_number" placeholder="Họ tên sinh viên">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control" id="insert_new_number" placeholder="Địa chỉ email">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-2">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Ngày sinh">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control" id="insert_price" placeholder="Số điện thoại">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-1">
                            <button type="button" id="save_new_electric" class="btn btn-primary col-xs-12">Lưu</button>
                        </div>

                        <div class="col-xs-6 col-sm-1">
                            <button type="button" onclick="$('#new_electric_row').fadeOut()" class="btn col-xs-12">Hủy</button>
                        </div>

                    </form>
                </div>

                <!--  -->
                <div id="import_excel" style="display: none">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        Có lỗi xảy ra trong quá trình tải lên:<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <form action="manager/tables/electrics/import" method="POST" role="form" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>

                            <div class="col-sm-1 col-xs-2">
                                <button type="submit" class="btn btn-primary">Tải lên</button>
                            </div>

                            <div class="col-sm-8 col-xs-5">
                                <span>*: Định dạng tệp phải là .xls hoặc .xslx</span>
                                <button type="button" class="btn btn-default pull-right" onclick="$('#import_excel').fadeOut()">Hủy</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!--  -->

                <!--  -->
                <div id="filter_electrics" style="display: block">

                    <form action="" method="POST" role="form">

                        {{ csrf_field() }}

                        <div class="col-xs-12 col-sm-2">
                            <div class="form-group">
                                <h5>Chọn thông tin: </h5>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nhập tên sinh viên">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-1">
                            <button type="button" class="btn btn-primary col-xs-12">Tìm</button>
                        </div>

                        <div class="col-xs-6 col-sm-1">
                            <button type="button" onclick="$('#filter_electrics').fadeOut()" class="btn btn-default col-xs-12">Hủy</button>
                        </div>

                    </form>

                </div>
                <!--  -->

                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table_students">
                        <thead>
                            <tr>
                                <th>STUDENT NAME</th>
                                <th>EMAIL</th>
                                <th>BIRTHDAY</th>
                                <th>GENDER</th>
                                <th>PHONE</th>
                                <th>DELETED</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection