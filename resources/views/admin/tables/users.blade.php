@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main">

    <div class="content">

        <table class="table table-bordered table-striped" id="table_users">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FULLNAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>CREATED AT</th>
                    <th>MANIPULATION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<script type="javascript">
    $('#table_users').Tabledit({
        url: 'process.php',
        columns: {
            identifier: [0, 'id'],
            editable: [
                [1, 'nickname'],
                [2, 'full_name'],
                [3, 'email'],
                [4, 'phone'],
                [5, 'address'],
                [6, 'created_at']
            ]
        }
    });
</script>

@endsection