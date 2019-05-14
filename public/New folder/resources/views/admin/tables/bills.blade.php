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
                    <th>CUSTOMER NAME</th>
                    <th>DATE ORDER</th>
                    <th>TOTAL</th>
                    <th>NOTE</th>
                    <th>CREATED AT</th>
                    <th>MANIPULATION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bills as $bill)
                <tr>
                    <td>{{ $bill->id }}</td>
                    <td>{{ $bill->full_name }}</td>
                    <td>{{ $bill->date_order }}</td>
                    <td>{{ $bill->total }}</td>
                    <td>{{ $bill->note }}</td>
                    <td>{{ $bill->created_at }}</td>
                    <td class="text-center">
                        <a href="{{ route('delete.bill', $bill->id) }}">
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