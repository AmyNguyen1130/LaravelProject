@extends('educator.page.educator')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-3">
                <div class="menu-vertical">
                    <ul role="tablist" class="nav">
                        <li class="active">
                            <a href="#status" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Danh sách thiết bị trong bếp</a>
                        </li>
                        <li>
                            <a href="#new_item" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Trang thiết bị mua mới</a>
                        </li>
                    </ul>
                </div>
            </div> -->

            <div class="col-md-12">

                <table class="table">
                    <thead style="background-color:coral;">
                        <tr>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kitchen_expenses as $kitchen)
                        <tr>
                            <td>{{ $kitchen->id }}</td>
                            <td>{{ $kitchen->time }}</td>
                            <td>{{ $kitchen->item }}</td>
                            <td>{{ $kitchen->quantity }}</td>
                            <td>{{ $kitchen->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection