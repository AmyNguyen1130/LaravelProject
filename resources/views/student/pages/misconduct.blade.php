@extends('student.layout.master')

@section('main-content')

<section id="main-content">
    <div class="container">

        <div class="solugan">
            <div class="box-product-head">
                <span class="box-title text-uppercase">
                    DANH SÁCH LỖI VI PHẠM
                </span>
                <span class="af-ter">

                </span>
            </div>
        </div>
        <div class="col-sm-3" style="margin-bottom: 50px;">
            <label for="">Tháng: </label>
            <select class="form-control" id="month_misconduct">
                @for( $year = 2017; $year <= 2019; $year++)
                    @for($month=01; $month<=12; $month++)
                        <option value="{{$year}}-{{$month}}">{{$year}}-{{$month}}</option>
                    @endfor
                @endfor
            </select>
        </div>
        <table class="table table-bordered table-striped" id="table_misconduct">
            <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <th>LỖI VI PHẠM</th>
                    <th>THỜI GIAN</th>
                    <th>SỐ TIỀN BỊ TRỪ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($misconducts as $misconduct)
                <tr>
                    <td>{{ $misconduct->id }}</td>
                    <td>{{ $misconduct->content }}</td>
                    <td>{{ $misconduct->time }}</td>
                    <td>{{ $misconduct->minus }}</td>
                </tr>
                @endforeach
                <tr>
                    <td>Tổng Tiền</td>
                    <td></td>
                    <td></td>
                    <td>{{$sum}}</td>
                </tr>
            </tbody>
        </table>

    </div>

</section>

<div class="space-50"></div>

<i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
@endsection