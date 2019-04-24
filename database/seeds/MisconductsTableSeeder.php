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
       	['student_id'=>1,'content'=>'Đi học muộn','time'=>'2018-03-23',,'minus'=>30000],
       	['student_id'=>2,'content'=>'Đi học muộn','time'=>'2018-05-13',,'minus'=>30000],
       	['student_id'=>3,'content'=>'Quên thẻ','time'=>'2018-04-07',,'minus'=>30000],
      	['student_id'=>4,'content'=>'Không đúng đồng phục','time'=>'2018-06-15',,'minus'=>30000],
     	['student_id'=>5,'content'=>'Không mang dép quay hậu','time'=>'2018-08-05',,'minus'=>30000],
     	['student_id'=>6,'content'=>'Đi học muộn','time'=>'2018-08-23',,'minus'=>30000],
     	['student_id'=>7,'content'=>'Đi học muộn','time'=>'2018-09-20',,'minus'=>30000],
     	['student_id'=>8,'content'=>'Quên thẻ','time'=>'2018-10-04',,'minus'=>30000],
     	['student_id'=>9,'content'=>'Không cất xe đạp đúng nơi quy định','time'=>'2018-10-23',,'minus'=>30000],
     	['student_id'=>10,'content'=>'Quên thẻ','time'=>'2018-11-04',,'minus'=>30000],
       ]);
    }
}
