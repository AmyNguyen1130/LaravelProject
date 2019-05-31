<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MisconductController extends Controller
{
    public function insertNewRocord(Request $data)
    {
        $rules = [
            'student_id' => 'integer',
            'time' => 'required|date',
            'misconduct' => 'required',
            'minus' => 'required|integer|min:0'
        ];

        $messages = [
            'student_id.integer' => 'Vui lòng chọn sinh viên',

            'time.date' => 'Vui lòng chọn kiểu date',
            'time.required' => 'Vui lòng chọn thời gian',

            'misconduct.required' => 'Vui lòng nhập lỗi vi phạm',

            'minus.required' => 'Vui lòng nhập số tiền bị trừ',
            'minus.integer' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên',
            'minus.min' => 'Vui lòng nhập vào kiểu dữ liệu số nguyên dương',

        ];

        $validator = Validator::make($data->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        } else {

            $insert_data[] = array(
                'student_id' => $data->student_id,
                'time' => $data->time,
                'content' => $data->misconduct,
                'minus' => $data->minus,
            );

            if (DB::table('misconducts')->insert($insert_data)) {
                return response()->json([
                    'error' => false,
                    'message' => "Insert thành công"
                ], 200);
            } else {
                return response()->json('Insert thất bại');
            }
        }
    }
}
