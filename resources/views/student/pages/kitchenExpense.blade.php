@extends('student.layout.master')

@section('main-content')

<section id="main-content">
    <div class="container">

        <div class="solugan">
            <div class="box-product-head">
                <span class="box-title text-uppercase">
                    CHI TIẾT CHI TIÊU Ở BẾP
                </span>
                <span class="af-ter">

                </span>
            </div>
        </div>
        <div class="col-sm-2" style="margin-bottom: 50px;">
            <label for="">Năm: </label>
            <select class="form-control" id="year_kitchen">
                @for( $year = 2017; $year <= 2019; $year++) <option value="{{$year}}">{{$year}}</option>
                    @endfor
            </select>

        </div>
        <div class="col-sm-2">
            <label for="">Tháng: </label>
            <select class="form-control" id="month_kitchen">
                @for( $month = 1; $month <= 12; $month++) @if( $month < 10){ <option value="0{{$month}}">0{{$month}}</option>
                    }
                    @else <option value="{{$month}}">{{$month}}</option>
                    @endif
                    @endfor
            </select>
        </div>
        <div class="table-responsive col-sm-12">
            <table class="table table-bordered table-striped" id="table_kitchen">
                <thead>
                    <tr class="bg-primary">
                        <th>#</th>
                        <th>THỜI GIAN</th>
                        <th>VẬT DỤNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kitchenExpenses as $kitchenExpense)
                    <tr>
                        <td>{{ $kitchenExpense->id }}</td>
                        <td>{{ $kitchenExpense->time }}</td>
                        <td>{{ $kitchenExpense->item }}</td>
                        <td>{{ $kitchenExpense->quantity }}</td>
                        <td>{{ number_format($kitchenExpense->price) }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Tổng Tiền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{number_format($sum)}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>

<div class="space-50"></div>

<i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
@endsection