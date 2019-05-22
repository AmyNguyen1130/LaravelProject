@extends('educator.page.educator')
@section('content')
<div class="content">
    <div class="container">
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
                                <th>Name_Student</th>
                                <th>Class</th>
                                <th>Contents</th>
                                <th>Time</th>
                                <th>Minus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($misconducts as $misconduct)
                            @foreach($classes as $class)
                            @foreach($students as $student)
                            @if($student->class_id == $class->id && $misconduct->student_id == $student->id)
                            <tr>
                                <td>{{ $misconduct->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $class->name }}</td>
                                <td>{{ $misconduct->content }}</td>
                                <td>{{ $misconduct->time }}</td>
                                <td>{{ $misconduct->minus }}</td>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection