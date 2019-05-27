<?php

use Illuminate\Database\Seeder;

class MisconductsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('misconducts')->insert([
			['student_id' => 1, 'content' => 'Đi học muộn', 'time' => '2018-3-23', 'minus' => 30000],
			['student_id' => 2, 'content' => 'Đi học muộn', 'time' => '2018-5-13', 'minus' => 30000],
			['student_id' => 3, 'content' => 'Quên thẻ', 'time' => '2018-4-07', 'minus' => 30000],
			['student_id' => 4, 'content' => 'Không đúng đồng phục', 'time' => '2018-6-15', 'minus' => 30000],
			['student_id' => 5, 'content' => 'Không mang dép quay hậu', 'time' => '2018-8-05', 'minus' => 30000],
			['student_id' => 6, 'content' => 'Đi học muộn', 'time' => '2018-8-23', 'minus' => 30000],
			['student_id' => 7, 'content' => 'Đi học muộn', 'time' => '2018-9-20', 'minus' => 30000],
			['student_id' => 8, 'content' => 'Quên thẻ', 'time' => '2018-10-04', 'minus' => 30000],
			['student_id' => 9, 'content' => 'Không cất xe đạp đúng nơi quy định', 'time' => '2018-10-23', 'minus' => 30000],
			['student_id' => 10, 'content' => 'Quên thẻ', 'time' => '2018-11-04', 'minus' => 30000],
			['student_id' => 11, 'content' => 'Đi học muộn', 'time' => '2018-12-23', 'minus' => 30000],
			['student_id' => 24, 'content' => 'Đi học muộn', 'time' => '2019-1-13', 'minus' => 30000],
			['student_id' => 33, 'content' => 'Quên thẻ', 'time' => '2019-01-7', 'minus' => 30000],
			['student_id' => 40, 'content' => 'Không đúng đồng phục', 'time' => '2019-2-15', 'minus' => 30000],
			['student_id' => 15, 'content' => 'Không mang dép quay hậu', 'time' => '2019-1-05', 'minus' => 30000],
			['student_id' => 26, 'content' => 'Đi học muộn', 'time' => '2019-2-23', 'minus' => 30000],
			['student_id' => 27, 'content' => 'Đi học muộn', 'time' => '2019-1-20', 'minus' => 30000],
			['student_id' => 28, 'content' => 'Quên thẻ', 'time' => '2019-2-04', 'minus' => 30000],
			['student_id' => 29, 'content' => 'Không cất xe đạp đúng nơi quy định', 'time' => '2019-2-23', 'minus' => 30000],
			['student_id' => 30, 'content' => 'Quên thẻ', 'time' => '2019-1-04', 'minus' => 30000],
			['student_id' => 21, 'content' => 'Đi học muộn', 'time' => '2019-3-23', 'minus' => 30000],
			['student_id' => 22, 'content' => 'Đi học muộn', 'time' => '2019-1-13', 'minus' => 30000],
			['student_id' => 33, 'content' => 'Quên thẻ', 'time' => '2019-2-07', 'minus' => 30000],
			['student_id' => 24, 'content' => 'Không đúng đồng phục', 'time' => '2019-1-15', 'minus' => 30000],
			['student_id' => 25, 'content' => 'Không mang dép quay hậu', 'time' => '2019-3-05', 'minus' => 30000],
			['student_id' => 16, 'content' => 'Đi học muộn', 'time' => '2019-2-23', 'minus' => 30000],
			['student_id' => 37, 'content' => 'Đi học muộn', 'time' => '2019-1-20', 'minus' => 30000],
			['student_id' => 28, 'content' => 'Quên thẻ', 'time' => '2019-4-04', 'minus' => 30000],
			['student_id' => 19, 'content' => 'Không cất xe đạp đúng nơi quy định', 'time' => '2019-3-23', 'minus' => 30000],
			['student_id' => 20, 'content' => 'Quên thẻ', 'time' => '2019-3-04', 'minus' => 30000],

		]);
	}
}
