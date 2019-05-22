@extends('educator.page.educator')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu-vertical">
                    <ul role="tablist" class="nav">
                        <li class="active">
                            <a href="#electrics" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Tiền điện</a>
                        </li>
                        <li>
                            <a href="#water" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Tiền nước</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active in" id="electrics">
                        <form method="POST" enctype="multipart/form-data">
                                <h3 style= "text-align: center;" >Tiền Điện</h3>
                                <div class="row">
                                    <table class="table">
                                        <thead style="background-color:coral;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Room</th>
                                                <th>Time</th>
                                                <th>Old_number</th>
                                                <th>New_number</th>
                                                <th>Price</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($electrics as $electric)
                                            @foreach($rooms as $room)
                                            @if($electric->room_id == $room->id)
                                            <tr>
                                                <td>{{ $electric->id }}</td>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ $electric->time }}</td>
                                                <td>{{ $electric->old_number }}</td>
                                                <td>{{ $electric->new_number }}</td>
                                                <td>{{ $electric->price }}</td>
                                                <td>{{ $electric->status }}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <hr width="85%">
                        </form>
                    </div>

                    <div class="tab-pane in" id="water">
                    <form method="POST" enctype="multipart/form-data">
                                <h3 style= "text-align: center;" >Tiền Nước</h3>
                                <div class="row">
                                    <table class="table">
                                        <thead style="background-color:coral;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Room</th>
                                                <th>Time</th>
                                                <th>Old_number</th>
                                                <th>New_number</th>
                                                <th>Price</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($waters as $water)
                                            @foreach($rooms as $room)
                                            @if($water->room_id == $room->id)
                                            <tr>
                                                <td>{{ $water->id }}</td>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ $water->time }}</td>
                                                <td>{{ $water->old_number }}</td>
                                                <td>{{ $water->new_number }}</td>
                                                <td>{{ $water->price }}</td>
                                                <td>{{ $water->status }}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <hr width="85%">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection