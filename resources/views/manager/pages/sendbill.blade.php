@extends("manager.layouts.master")

@section("manager.manager-content")

<div class="right_col" role="main" onload="loadDataToSendBill()">

    <div style="margin-top: 60px">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <form action="manager/sendbill/send" method="POST">

            {{ csrf_field() }}

            <div class="panel panel-default" style="margin-top: 30px">
                <div class="panel-heading" style="min-height: 53px">

                    <div class="col-xs-12 col-sm-1">
                        <div class="form-group">
                            <h5>Lọc:</h5>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <select class="form-control" name="year" id="sendbill_year">
                                <option selected disabled>Năm</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <select class="form-control" name="month" id="sendbill_month">
                                <option selected disabled>Tháng</option>
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

                    <div class="col-xs-12 col-sm-2">
                        <div class="form-group">
                            <h5 class="pull-right">Hạn nộp:</h5>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <input type="date" class="form-control" name="date" id="date">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <div class="form-group">
                            <input type="time" class="form-control" name="time" id="time">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-1">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

    <div class="content" style="padding-top: 10px">

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="panel-title">Electric Table Data</span>
            </div>
            <div class="panel-body">

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

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="panel-title">Water Table Data</span>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table_waters">

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