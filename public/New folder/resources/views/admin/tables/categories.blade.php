@extends("admin.layouts.master")

@section("admin.admin-content")

<div class="right_col" role="main">

    <div class="content">

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

        <table class="table table-bordered table-striped" id="table_users">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>CREATED AT</th>
                    <th>LAST UPDATED</th>
                    <th>MANIPULATION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>{{ $type->created_at }}</td>
                    <td>{{ $type->updated_at }}</td>
                    <td class="text-center">
                        <a href="{{ route('delete.type', $type->id) }}">
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