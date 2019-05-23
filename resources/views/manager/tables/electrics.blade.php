@extends("manager.layouts.master")

@section("manager.manager-content")

<div class="right_col" role="main" onload="loadDataTableElectrics()">

    <div class="content">

        <table class="table table-bordered table-striped" id="table_electrics">
            <thead>
                <tr>
                    <th>ROOM NAME</th>
                    <th>TIME</th>
                    <th>OLD NUMBER</th>
                    <th>NEW NUMBER</th>
                    <th>PRICE</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>

@endsection