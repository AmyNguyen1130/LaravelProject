<?php

use Illuminate\Database\Seeder;

class EducatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educators')->insert([
            ['email' => 'nguyen.tran@passerellesnumeriques.org', 'name' => 'Nguyen Tran Dong', 'birthday' => '1990-09-01', 'gender' => 'Nam', 'address' => '43-Nguyen Chi Thanh-Ba Dinh-Ha Noi', 'phone' => '0354867954', 'qualification' => 'Dai Hoc'],
            ['email' => 'loan.thi.kieu.vu@passerellesnumeriques.org', 'name' => 'Vu Thi Kieu Loan', 'birthday' => '1986-12-12', 'gender' => 'Nu', 'address' => '12-Nguyen Van Thoai-Da Nang', 'phone' => '0325165854', 'qualification' => 'Dai Hoc'],
            ['email' => 'phuong.dang@passerellesnumeriques.org', 'name' => 'Dang Nguyen Nguyen Phuong', 'birthday' => '1994-04-01', 'gender' => 'Nu', 'address' => '14-Vo Van Kiet-Da Nang', 'phone' => '0315485472', 'qualification' => 'Dai Hoc'],
        ]);
    }
}
