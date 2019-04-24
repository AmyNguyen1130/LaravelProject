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
        DB::table('issuses')->insert([
       	['content'=>'Hư quạt','student_id'=>1,'room_id'=>1],
       	['content'=>'Hư tủ lạnh','student_id'=>2,'room_id'=>2],
       	['content'=>'Hư chốt khóa cửa','student_id'=>3,'room_id'=>3],
       	['content'=>'Hư vòi nước','student_id'=>4,'room_id'=>4],
       	['content'=>'Hư ổ cắm điện','student_id'=>5,'room_id'=>5],
       	['content'=>'Hư nồi cơm điện','student_id'=>6,'room_id'=>6],
       	['content'=>'Hư bóng đèn','student_id'=>7,'room_id'=>7],
       	['content'=>'Hư giường','student_id'=>7,'room_id'=>7],
       	['content'=>'Hư chốt khóa cửa','student_id'=>8,'room_id'=>8],
       	['content'=>'Hư ống nước','student_id'=>9,'room_id'=>9],
       	['content'=>'Hư bóng đèn nhà tắm','student_id'=>10,'room_id'=>10],

    
    }
}
