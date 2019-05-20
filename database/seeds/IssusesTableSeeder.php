<?php

use Illuminate\Database\Seeder;

class IssusesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('issues')->insert([
			['content' => 'Hư quạt', 'student_id' => 1, 'room_id' => 1,'created_at'=>'2018-02-01','updated_at'=>'2018-02-02'],
			['content' => 'Hư tủ lạnh', 'student_id' => 2, 'room_id' => 2,'created_at'=>'2018-03-01','updated_at'=>'2018-03-04'],
			['content' => 'Hư chốt khóa cửa', 'student_id' => 3, 'room_id' => 3,'created_at'=>'2019-01-01','updated_at'=>'2019-01-03'],
			['content' => 'Hư vòi nước', 'student_id' => 4, 'room_id' => 4,'created_at'=>'2018-04-01','updated_at'=>'2018-04-01'],
			['content' => 'Hư ổ cắm điện', 'student_id' => 5, 'room_id' => 5,'created_at'=>'2019-08-01','updated_at'=>'2019-08-01'],
			['content' => 'Hư nồi cơm điện', 'student_id' => 6, 'room_id' => 6,'created_at'=>'2018-07-01','updated_at'=>'2018-07-01'],
			['content' => 'Hư bóng đèn', 'student_id' => 7, 'room_id' => 7,'created_at'=>'2019-02-01','updated_at'=>'2019-02-01'],
			['content' => 'Hư giường', 'student_id' => 7, 'room_id' => 7,'created_at'=>'2019-04-01','updated_at'=>'2019-04-01'],
			['content' => 'Hư chốt khóa cửa', 'student_id' => 8, 'room_id' => 8,'created_at'=>'2019-05-01','updated_at'=>'2019-05-01'],
			['content' => 'Hư ống nước', 'student_id' => 9, 'room_id' => 9,'created_at'=>'2019-01-01','updated_at'=>'2019-01-01'],
			['content' => 'Hư bóng đèn nhà tắm', 'student_id' => 10, 'room_id' => 10,'created_at'=>'2018-05-01','updated_at'=>'2018-05-01'],
		]);
	}
}
