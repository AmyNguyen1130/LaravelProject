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
                <tr>
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
                    <td>{{ $issues->create_at }}</td>
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

    </div>

</section>

<div class="space-50"></div>

<i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
@endsection