@extends("manager.layouts.master")

@section("manager.manager-content")

<div class="right_col" role="main" onload="loadDataTableElectrics()">

    <div class="content" style="padding-top: 10px">

        <div class="panel panel-default" style="margin-top: 60px">
            <div class="panel-heading" style="min-height: 53px">
                <span class="panel-title">Electric Table Data</span>
                <button type="button" onclick="" class="btn btn-default pull-right" title="Lọc"><i class="fa fa-filter fa-lg" aria-hidden="true"></i></button>
                <button type="button" onclick="$('#import_excel').fadeIn()" class="btn btn-default pull-right" title="Import từ file Excel"><i class="fa fa-upload fa-lg" aria-hidden="true"></i></button>
                <button type="button" onclick="$('#new_electric_row').fadeIn()" class="btn btn-default pull-right" title="Thêm 1 bản ghi"><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></button>
            </div>
            <div class="panel-body">

                <form action="" method="POST" role="form" id="new_electric_row" style="display: none">

                    {{ csrf_field() }}

                    <div class="col-xs-6 col-sm-1">
                        <div class="form-group">
                            <select class="form-control" id="room_id">
                                @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-1">
                        <div class="form-group">
                            <select class="form-control" id="year">
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-1">
                        <div class="form-group">
                            <select class="form-control" id="month">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="old_number" placeholder="Chỉ số cũ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="new_number" placeholder="Chỉ số mới">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="price" placeholder="Số tiền">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-1">
                        <div class="form-group">
                            <select class="form-control" id="status">
                                <option value="1">Đã nộp</option>
                                <option value="0">Chưa nộp</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-1">
                        <button type="button" class="btn btn-primary col-xs-12">Lưu</button>
                    </div>

                    <div class="col-xs-6 col-sm-1">
                        <button type="button" onclick="$('#new_electric_row').fadeOut()" class="btn col-xs-12">Hủy</button>
                    </div>

                </form>

                <!--  -->
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

                <form id="import_excel" style="display: none" action="manager/tables/electrics/import" method="POST" role="form" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>

                        <div class="col-sm-1 col-xs-2">
                            <button type="submit" class="btn btn-primary">Tải lên</button>
                        </div>

                        <div class="col-sm-8 col-xs-4">
                            <p>*: Định dạng tệp phải là .xls hoặc .xslx</p>
                        </div>
                    </div>

                </form>
                <!--  -->

                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table_electrics">

                        <thead>
                            <tr>
                                <th>ROOM NAME</th>
                                <th>TIME</th>
                                <th>OLD NUMBER</th>
                                <th>NEW NUMBER</th>
                                <th>PRICE</th>
                                <th>STATUS</th>
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
</div>

@endsection