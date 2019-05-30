@extends("educator.layouts.master")

@section("educator.educator-content")

<div class="right_col" role="main">

    <div class="content">

        <div class="panel panel-default" style="margin-top: 60px">
            <div class="panel-heading" style="min-height: 53px">
                <span class="panel-title text-uppercase">Students' room issues</span>
                <button type="button" onclick="$('#filter_electrics').fadeIn(); $('#import_excel').hide(); $('#new_electric_row').hide();" class="btn btn-default pull-right" title="Lọc"><i class="fa fa-filter fa-lg" aria-hidden="true"></i></button>
                <button type="button" onclick="$('#import_excel').fadeIn(); $('#filter_electrics').hide(); $('#new_electric_row').hide();" class="btn btn-default pull-right" title="Import từ file Excel"><i class="fa fa-upload fa-lg" aria-hidden="true"></i></button>
                <button type="button" onclick="$('#new_electric_row').fadeIn(); $('#filter_electrics').hide(); $('#import_excel').hide();" class="btn btn-default pull-right" title="Thêm 1 bản ghi"><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table_issues">
                        <thead>
                            <tr>
                                <th>ISSUE NAME</th>
                                <th>ROOM</th>
                                <th>STUDENT REPORTED</th>
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