<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('classes')->insert([
       	['id'=>1,'name'=>'PNV20B','educator_id'=>'GV01','number_of_students'=>23],
       	['id'=>2,'name'=>'PNV20A','educator_id'=>'GV02','number_of_students'=>21],
       	['id'=>3,'name'=>'PNV21A','educator_id'=>'GV03','number_of_students'=>23],
       	['id'=>4,'name'=>'PNV21B','educator_id'=>'GV04','number_of_students'=>22],
       	['id'=>5,'name'=>'PNV19A','educator_id'=>'GV05','number_of_students'=>22],
       	['id'=>6,'name'=>'PNV19B','educator_id'=>'GV06','number_of_students'=>23],
       ]);
    }
}
