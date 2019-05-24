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
        <div class="col-sm-3" style="margin-bottom: 50px;">
            <label for="">Tháng: </label>
            <select class="form-control" id="month_kitchen">
                @foreach($months as $month)
                <option value="{{date('Y-m', strtotime($month->time))}}">{{date('Y-m', strtotime($month->time))}}</option>
                @endforeach
            </select>
        </div>
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
                    <td>{{ $kitchenExpense->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</section>

<div class="space-50"></div>

<i id="scroll-top" class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
@endsection