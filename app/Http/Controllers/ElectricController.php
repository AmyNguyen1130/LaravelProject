<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Electric;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ElectricController extends Controller
{
    public function insertNewRocord(Request $data)
    {
        $rules = [
            'room_id' => 'integer',
            'year' => 'integer',
            'month' => 'integer',
            'old_number' => 'required|integer|min:0',
            'new_number' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
            'status' => 'integer',
        ];

        $messages = [
            'room_id.integer' => 'Vui lòng chọn phòng',

            'year.integer' => 'Vui lòng chọn năm',
            'month.integer' => 'Vui lòng chọn tháng',

            'old_number.required' => 'Vui lòng nhập chỉ số cũ',
            'old_number.integer' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên',
            'old_number.min' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên dương',

            'new_number.required' => 'Vui lòng nhập chỉ số mới',
            'new_number.integer' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên',
            'new_number.min' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên dương',

            'price.required' => 'Vui lòng nhập số tiền',
            'price.integer' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên',
            'price.min' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên dương',

            'status.integer' => 'Vui lòng chọn tình trạng',
        ];

        $validator = Validator::make($data->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            $month = ($data->month > 9) ? $data->month : '0' . $data->month;
            $time = $data->year . '-' . $month;

            $insert_data[] = array(
                'room_id' => $data->room_id,
                'time' => $time,
                'old_number' => $data->old_number,
                'new_number' => $data->new_number,
                'price' => $data->price,
                'status' => $data->status,
            );

            if (DB::table('electrics')->insert($insert_data)) {
                return response()->json('Insert thành công');
            } else {
                return response()->json('Insert thất bại');
            }
        }
    }

    public function getOldNumber(Request $data)
    {
        $electric = Electric::select('new_number')->where([
            ['room_id', $data->room_id],
            ['time', $data->time]
        ])->first();
        return response()->json($electric->new_number);
    }

    public function filterByYear(Request $req)
    {
        $electrics = Electric::select('electrics.id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status', 'rooms.name as room_name', 'electrics.deleted')->join('rooms', 'electrics.room_id', 'rooms.id')->where('time', 'like', $req->filter_year . '-%')->get();
        $data = "";
        foreach ($electrics as $electric) {

            // DÙNG ĐỂ HIỂN THỊ RA HTML
            $status = ($electric->status == 1) ? "Đã nộp" : "Chưa nộp";
            $is_active = ($electric->deleted == 0) ? "False" : "True";
            $isDeleted = ($electric->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            $isPaied = ($electric->status == 0) ? "background: #f49d41; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isPaied . '' . $isDeleted . "'>
                <td class='hidden'>" . $electric->id . "</td>
                <td>" . $electric->room_name . "</td>
                <td>" . $electric->time . "</td>
                <td>" . $electric->old_number . "</td>
                <td>" . $electric->new_number . "</td>
                <td>" . $electric->price . "</td>
                <td>" . $status . "</td>
                <td>" . $is_active . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function filterByMonth(Request $req)
    {
        $time = $req->filter_year . (($req->filter_month > 9) ? "-" : "-0") . $req->filter_month;
        $electrics = Electric::select('electrics.id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status', 'rooms.name as room_name', 'electrics.deleted')->join('rooms', 'electrics.room_id', 'rooms.id')->where('time', $time)->get();
        $data = "";
        foreach ($electrics as $electric) {

            // DÙNG ĐỂ HIỂN THỊ RA HTML
            $status = ($electric->status == 1) ? "Đã nộp" : "Chưa nộp";
            $is_active = ($electric->deleted == 0) ? "False" : "True";
            $isDeleted = ($electric->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            $isPaied = ($electric->status == 0) ? "background: #f49d41; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isPaied . '' . $isDeleted . "'>
                <td class='hidden'>" . $electric->id . "</td>
                <td>" . $electric->room_name . "</td>
                <td>" . $electric->time . "</td>
                <td>" . $electric->old_number . "</td>
                <td>" . $electric->new_number . "</td>
                <td>" . $electric->price . "</td>
                <td>" . $status . "</td>
                <td>" . $is_active . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function filterByRoom(Request $req)
    {
        $time = $req->filter_year . (($req->filter_month > 9) ? "-" : "-0") . $req->filter_month;
        $electrics = Electric::select('electrics.id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status', 'rooms.name as room_name', 'electrics.deleted')->join('rooms', 'electrics.room_id', 'rooms.id')->where('time', $time)->where('room_id', $req->filter_room_id)->get();
        $data = "";
        foreach ($electrics as $electric) {

            // DÙNG ĐỂ HIỂN THỊ RA HTML
            $status = ($electric->status == 1) ? "Đã nộp" : "Chưa nộp";
            $is_active = ($electric->deleted == 0) ? "False" : "True";
            $isDeleted = ($electric->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            $isPaied = ($electric->status == 0) ? "background: #f49d41; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isPaied . '' . $isDeleted . "'>
                <td class='hidden'>" . $electric->id . "</td>
                <td>" . $electric->room_name . "</td>
                <td>" . $electric->time . "</td>
                <td>" . $electric->old_number . "</td>
                <td>" . $electric->new_number . "</td>
                <td>" . $electric->price . "</td>
                <td>" . $status . "</td>
                <td>" . $is_active . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function filterByStatus(Request $req)
    {
        $electrics = Electric::select('electrics.id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status', 'rooms.name as room_name', 'electrics.deleted')->join('rooms', 'electrics.room_id', 'rooms.id')->where('status', $req->filter_status)->get();
        $data = "";
        foreach ($electrics as $electric) {

            // DÙNG ĐỂ HIỂN THỊ RA HTML
            $status = ($electric->status == 1) ? "Đã nộp" : "Chưa nộp";
            $is_active = ($electric->deleted == 0) ? "False" : "True";
            $isDeleted = ($electric->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            $isPaied = ($electric->status == 0) ? "background: #f49d41; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isPaied . '' . $isDeleted . "'>
                <td class='hidden'>" . $electric->id . "</td>
                <td>" . $electric->room_name . "</td>
                <td>" . $electric->time . "</td>
                <td>" . $electric->old_number . "</td>
                <td>" . $electric->new_number . "</td>
                <td>" . $electric->price . "</td>
                <td>" . $status . "</td>
                <td>" . $is_active . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }
}
