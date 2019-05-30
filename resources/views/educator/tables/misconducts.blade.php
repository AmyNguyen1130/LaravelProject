@extends("educator.layouts.master")

@section("educator.educator-content")

<div class="right_col" role="main">

    <div class="content">

        <div class="panel panel-default" style="margin-top: 60px">
            <div class="panel-heading" style="min-height: 53px">
                <h3 class="panel-title text-uppercase">Students' misconduct list</h3>
            </div>
            <div class="panel-body">
                <!-- <div class="form-group">
                    <select class="form-control" id="filter_role">
                        <option value="educator">Educators</option>
                        <option value="student">Students</option>
                        <option value="manager">Managers</option>
                        <option value="admin">Admin</option>
                    </select>
                </div> -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table_misconducts">
                        <thead>
                            <tr>
                                <th>STUDENT NAME</th>
                                <th>MISCONDUCT</th>
                                <th>TIME</th>
                                <th>MINUS</th>
                                <th>IS DELETED</th>
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