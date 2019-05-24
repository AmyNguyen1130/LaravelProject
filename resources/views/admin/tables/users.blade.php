@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main" onload="loadDataTableUsers()">

    <div class="content">

        <div class="form-group">
            <select class="form-control" id="role">
                <option value="educator" selected>Educators</option>
                <option value="student">Students</option>
                <option value="manager">Managers</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <table class="table table-bordered table-striped" id="table_users">
            <thead>
                <tr>
                    <th>FULLNAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>PHONE</th>
                    <th>ROLE</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>

@endsection