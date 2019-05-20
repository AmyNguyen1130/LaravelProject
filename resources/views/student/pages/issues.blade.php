@extends('student.layout.master')

@section('main-content')

<section id="main-content">
    <div class="container">

        <div class="solugan">
            <div class="box-product-head">
                <span class="box-title text-uppercase">
                    DANH SÁCH THIẾT BỊ HƯ HỎNG ĐÃ ĐƯỢC BÁO CÁO
                </span>
                <span class="af-ter">

                </span>
            </div>
        </div>
        <table class="table table-bordered table-striped" id="table_users">
            <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <th>STUDENT NAME</th>
                    <th>ROOM</th>
                    <th>ISSUE</th>
                    <th>STATUS</th>
                    <th>CREATED AT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($issues as $issues)
                <tr>
                    <td>{{ $issues->id }}</td>
                    <td>{{ $issues->student_name }}</td>
                    <td>{{ $issues->room_name }}</td>
                    <td>{{ $issues->content }}</td>
                    <td></td>
                    <td>{{ $issues->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <div class="solugan">
            <div class="box-product-head">
                <span class="box-title text-uppercase">
                    BÁO CÁO HƯ HỎNG
                </span>
                <span class="af-ter">

                </span>
            </div>
        </div>

        <div class="col-sm-6 col-sm-offset-3">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="student/sendReport" method="POST">
                <legend></legend>
                {{ csrf_field() }}
                <div class="form-group">

                    <label for="room" class="">Phòng</label>

                    <select class="form-control" name="room">
                        @foreach ($rooms->all() as $room)
                        <option value="{{$room->id}}">{{$room->name}}</option>
                        @endforeach
                    </select>
                    <p class="text-danger error errorEmail"></p>
                </div>

                <div class="form-group">
                    <label for="content">Vấn Đề</label>
                    <textarea name="content" cols="30" rows="7" class="form-control"></textarea>
                </div>

                <button type="submit" id="btn-report" class="btn btn-primary col-xs-12">GỬI</button>
            </form>
        </div>

    </div>

</section>

<div class="space-50"></div>

<i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
@endsection