@extends('student.layout.master')

@section('main-content')

<section id="main-content">
    <div class="container">

        <div class="solugan">
            <div class="box-product-head">
                <span class="box-title text-uppercase">
                    TIỀN NƯỚC
                </span>
                <span class="af-ter">

                </span>
            </div>
        </div>
        <div class="col-sm-3" style="margin-bottom: 50px;">
            <label for="">Tháng: </label>
            <select class="form-control" id="month_water">
                @foreach($months1 as $month1)
                <option value="{{$month1->time}}">{{$month1->time}}</option>
                @endforeach
            </select>
        </div>
        <table class="table table-bordered table-striped" id="table_water">
            <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <th>PHÒNG</th>
                    <th>THỜI GIAN</th>
                    <th>CHỈ SỐ CŨ</th>
                    <th>CHỈ SỐ MỚI</th>
                    <th>THÀNH TIỀN</th>
                    <th>TÌNH TRẠNG</th>
                </tr>
            </thead>
            <tbody>
                @foreach($water as $water)
                <tr style="background: @if($room_current->room_id == $water->room_id)  #ffff00 @endif">
                    <td>{{ $stt++ }}</td>
                    <td>{{ $water->room_name }}</td>
                    <td>{{ $water->time }}</td>
                    <td>{{ $water->old_number }}</td>
                    <td>{{ $water->new_number }}</td>
                    <td>{{ number_format($water->price) }}</td>
                    <td>@if($water->status==1) Đã Nộp @else Chưa Nộp @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="solugan">
            <div class="box-product-head">
                <span class="box-title text-uppercase">
                    TIỀN ĐIỆN
                </span>
                <span class="af-ter">

                </span>
            </div>
        </div>

        <div class="col-sm-3" style="margin-bottom: 50px;">
            <label for="">Tháng: </label>
            <select class="form-control" id="month_electric">
                @foreach($months1 as $month1)
                <option value="{{$month1->time}}">{{$month1->time}}</option>
                @endforeach
            </select>
        </div>
        <table class="table table-bordered table-striped" id="table_electric">
            <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <th>PHÒNG</th>
                    <th>THỜI GIAN</th>
                    <th>CHỈ SỐ CŨ</th>
                    <th>CHỈ SỐ MỚI</th>
                    <th>THÀNH TIỀN</th>
                    <th>TÌNH TRẠNG</th>
                </tr>
            </thead>
            <tbody>
                <p class="hidden"> {{$stt=1}}</p>
                @foreach($electric as $electric)
                <tr style="background: @if($room_current->room_id == $electric->room_id)  #ffff00 @endif">
                    <td>{{ $stt++ }}</td>
                    <td>{{ $electric->room_name }}</td>
                    <td>{{ $electric->time }}</td>
                    <td>{{ $electric->old_number }}</td>
                    <td>{{ $electric->new_number }}</td>
                    <td>{{ number_format($electric->price) }}</td>
                    <td>@if($electric->status==1) Đã Nộp @else Chưa Nộp @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</section>

<div id="test">

</div>

<div class="space-50"></div>

<i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
@endsection