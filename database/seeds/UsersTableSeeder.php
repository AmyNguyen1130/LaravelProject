<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'tai.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'educator'],
            ['email' => 'phuong.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'educator'],
            ['email' => 'ngoctai.dev@gmail.com', 'password' => Hash::make('password'), 'role' => 'educator'],
            ['email' => 'yquyet', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'quachdieu', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'ly.doan@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'ngovan', 'password' => Hash::make('password'), 'role' => 'manage'],
            ['email' => 'thuycao', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'giathinh', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'lamdinh', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thiethuynh', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'giangtra', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'camho', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'phancuong', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'taitran', 'password' => Hash::make('34875'), 'role' => 'student'],
            ['email' => 'huutuan', 'password' => Hash::make('35874'), 'role' => 'student'],
            ['email' => 'huyho', 'password' => Hash::make('58745'), 'role' => 'student'],
            ['email' => 'hotao', 'password' => Hash::make('02477'), 'role' => 'student'],
            ['email' => 'kieta', 'password' => Hash::make('56320'), 'role' => 'student'],
            ['email' => 'thanhdinh', 'password' => Hash::make('74587'), 'role' => 'student'],
            ['email' => 'thaotran', 'password' => Hash::make('32154'), 'role' => 'student'],
            ['email' => 'uicoor', 'password' => Hash::make('54201'), 'role' => 'student'],
            ['email' => 'namdang', 'password' => Hash::make('68547'), 'role' => 'student'],
            ['email' => 'phucdam', 'password' => Hash::make('32159'), 'role' => 'student'],
            ['email' => 'bliry', 'password' => Hash::make('36984'), 'role' => 'student'],
            ['email' => 'hangnguyen', 'password' => Hash::make('84576'), 'role' => 'student'],
            ['email' => 'xuyennguyen', 'password' => Hash::make('33251'), 'role' => 'student'],
            ['email' => 'dongnguyenthi', 'password' => Hash::make('54870'), 'role' => 'student'],
            ['email' => 'myhoih', 'password' => Hash::make('01240'), 'role' => 'student'],
            ['email' => 'cuongphan', 'password' => Hash::make('52001'), 'role' => 'student'],
            ['email' => 'thuho', 'password' => Hash::make('20188'), 'role' => 'student'],
            ['email' => 'taotran', 'password' => Hash::make('03358'), 'role' => 'student'],
            ['email' => 'tamnguyen', 'password' => Hash::make('52221'), 'role' => 'student'],
            ['email' => 'khanhdo', 'password' => Hash::make('00884'), 'role' => 'student'],
            ['email' => 'hiepbui', 'password' => Hash::make('33669'), 'role' => 'student'],
            ['email' => 'longtran', 'password' => Hash::make('11558'), 'role' => 'student'],
            ['email' => 'thuatdo', 'password' => Hash::make('88997'), 'role' => 'student'],
            ['email' => 'ngocha', 'password' => Hash::make('11446'), 'role' => 'student'],
            ['email' => 'tienphan', 'password' => Hash::make('87741'), 'role' => 'student'],
            ['email' => 'manhnguyen', 'password' => Hash::make('66548'), 'role' => 'student'],
            ['email' => 'loana', 'password' => Hash::make('77522'), 'role' => 'student'],
            ['email' => 'nhungnguyen', 'password' => Hash::make('85011'), 'role' => 'student'],
            ['email' => 'onho', 'password' => Hash::make('99885'), 'role' => 'student'],
            ['email' => 'huyenho', 'password' => Hash::make('64855'), 'role' => 'student'],
            ['email' => 'vannguyen', 'password' => Hash::make('00012'), 'role' => 'student'],
        ]);
    }
}
