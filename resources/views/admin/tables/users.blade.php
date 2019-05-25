@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main" onload="loadDataTableUsers()">

    <div class="content">

        <div class="form-group">
            <select class="form-control" id="role">
                <option value="educator">Educators</option>
                <option value="student">Students</option>
                <option value="manager">Managers</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">User Data</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table_users">
                        <thead>
                            <tr>
                                <th>FULLNAME</th>
                                <th>EMAIL</th>
                                <th>GENDER</th>
                                <th>PHONE</th>
                                <th>ROLE</th>
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