@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main">

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if($message = Session::get('failed'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="content">

        <a href="{{ route('users.getAdd') }}"><i class="fa fa-plus-square-o fa-2x" aria-hidden="true"></i> Thêm tài khoản</a>

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
                    <td class="text-center">
                        <a href="{{ route('delete.user', $user->id) }}">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection