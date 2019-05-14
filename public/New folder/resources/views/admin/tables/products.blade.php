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
                    <th>TYPE</th>
                    <th>UNIT PRICE</th>
                    <th>PROMOTION PRICE</th>
                    <th>UNIT</th>
                    <th>CREATED AT</th>
                    <th>MANIPULATION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->id_type }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>{{ $product->promotion_price }}</td>
                    <td>{{ $product->unit }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td class="text-center">
                        <a href="{{ route('delete.product', $product->id) }}" title="Xóa">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="product-detail/{{ $product->id }}" title="Xem sản phẩm">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection