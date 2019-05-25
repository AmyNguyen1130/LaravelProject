@extends("manager.layouts.master")

@section("manager.manager-content")

<div class="right_col" role="main" onload="loadDataTableElectrics()">

    <div class="content">

        <div class="panel-heading">
            <h3 class="panel-title">IMPORT HÓA ĐƠN TIỀN ĐIỆN</h3>
        </div>
        <div class="panel-body">

            <form action="manager/tables/electrics/import" method="POST" role="form" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="row">
                    <div class="col-xs-5">
                        <div class="form-group">
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-primary">Tải lên</button>
                    </div>

                    <div class="col-xs-5">
                        <p>*: Định dạng tệp phải là .xls hoặc .xslx</p>
                    </div>
                </div>

            </form>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Electric Data</h3>
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

    </div>

</div>
</div>

@endsection