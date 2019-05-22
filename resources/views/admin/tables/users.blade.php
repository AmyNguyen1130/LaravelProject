@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main" onload="loadData()">

    <div class="content">

        <table class="table table-bordered table-striped" id="table_users">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FULLNAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>

@endsection