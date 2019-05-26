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
}
