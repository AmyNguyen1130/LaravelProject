@extends('educator.page.educator')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu-vertical">
                    <ul role="tablist" class="nav">
                        @foreach($rooms as $room)
                        <li>
                            <a href="#room-{{ $room->name }}" data-toggle="tab" aria-expanded="true"><i class="fa fa-file-text-o"></i> Phòng {{ $room->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content">
                    <p class="hidden">{{ $count = 1 }}</p>
                    @foreach($rooms as $room)
                    <div class="tab-pane {{ $count == 1 ? 'active' : '' }} in" id="room-{{ $room->name }}">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="room-info">
                                <h3>Thông Tin Phòng {{ $room->name }}</h3>
                                <hr width="85%">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1 text-center">
                                        <a style="color:coral;">Room ID: {{ $room->id }}</a>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1 text-center">
                                        <a style="color:coral;">Name Room: {{ $room->name }}</a>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1 text-center">
                                        <a style="color:coral;">Floor: {{ $room->floor }}</a>
                                    </div>
                                </div>
                                <hr width="85%">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2    text-center">
                                        <a style="color:coral;">Member: {{ $room->number_of_members }}</a>
                                        <hr width="85%">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    <thead style="background-color:coral;">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Birthday</th>
                                                            <th>Gender</th>
                                                            <th>Phone_number</th>
                                                            <th>Class</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($classes as $class)
                                                        @foreach($students as $student)
                                                        @if($room->id == $student->room_id and $student->class_id == $class->id)
                                                        <tr>
                                                            <td style="text-align: left;">{{ $student->name }}</td>
                                                            <td style="text-align: left;">{{ $student->birthday }}</td>
                                                            <td style="text-align: left ;">{{ $student->gender }}</td>
                                                            <td style="text-align: left;">{{ $student->phone }}</td>
                                                            <td style="text-align: left;">{{ $class->name }}</td>
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr width="85%">
                            </div>
                        </form>
                    </div>
                    <p class="hidden">{{ $count++ }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection