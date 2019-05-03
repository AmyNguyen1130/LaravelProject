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
            ['code' => 'Edu01', 'username' => 'dongnguyen', 'password' => Hash::make('58542'), 'role' => 'educator'],
            ['code' => 'Edu02', 'username' => 'loannguyen', 'password' => Hash::make('02154'), 'role' => 'educator'],
            ['code' => 'Edu03', 'username' => 'phuongdang', 'password' => Hash::make('02585'), 'role' => 'educator'],
            ['code' => 'SV01', 'username' => 'yquyet', 'password' => Hash::make('12345'), 'role' => 'student'],
            ['code' => 'SV03', 'username' => 'quachdieu', 'password' => Hash::make('02596'), 'role' => 'student'],
            ['code' => 'SV02', 'username' => 'lydoan', 'password' => Hash::make('52487'), 'role' => 'student'],
            ['code' => 'SV41', 'username' => 'ngovan', 'password' => Hash::make('25895'), 'role' => 'manage'],
            ['code' => 'SV17', 'username' => 'thuycao', 'password' => Hash::make('02478'), 'role' => 'student'],
            ['code' => 'SV06', 'username' => 'giathinh', 'password' => Hash::make('02369'), 'role' => 'student'],
            ['code' => 'SV04', 'username' => 'lamdinh', 'password' => Hash::make('25986'), 'role' => 'student'],
            ['code' => 'SV05', 'username' => 'thiethuynh', 'password' => Hash::make('25967'), 'role' => 'student'],
            ['code' => 'SV07', 'username' => 'giangtra', 'password' => Hash::make('07894'), 'role' => 'student'],
            ['code' => 'SV08', 'username' => 'camho', 'password' => Hash::make('32487'), 'role' => 'student'],
            ['code' => 'SV09', 'username' => 'phancuong', 'password' => Hash::make('35968'), 'role' => 'student'],
            ['code' => 'SV10', 'username' => 'taitran', 'password' => Hash::make('34875'), 'role' => 'student'],
            ['code' => 'SV11', 'username' => 'huutuan', 'password' => Hash::make('35874'), 'role' => 'student'],
            ['code' => 'SV12', 'username' => 'huyho', 'password' => Hash::make('58745'), 'role' => 'student'],
            ['code' => 'SV13', 'username' => 'hotao', 'password' => Hash::make('02477'), 'role' => 'student'],
            ['code' => 'SV14', 'username' => 'kieta', 'password' => Hash::make('56320'), 'role' => 'student'],
            ['code' => 'SV15', 'username' => 'thanhdinh', 'password' => Hash::make('74587'), 'role' => 'student'],
            ['code' => 'SV16', 'username' => 'thaotran', 'password' => Hash::make('32154'), 'role' => 'student'],
            ['code' => 'SV18', 'username' => 'uicoor', 'password' => Hash::make('54201'), 'role' => 'student'],
            ['code' => 'SV19', 'username' => 'namdang', 'password' => Hash::make('68547'), 'role' => 'student'],
            ['code' => 'SV20', 'username' => 'phucdam', 'password' => Hash::make('32159'), 'role' => 'student'],
            ['code' => 'SV21', 'username' => 'bliry', 'password' => Hash::make('36984'), 'role' => 'student'],
            ['code' => 'SV22', 'username' => 'hangnguyen', 'password' => Hash::make('84576'), 'role' => 'student'],
            ['code' => 'SV23', 'username' => 'xuyennguyen', 'password' => Hash::make('33251'), 'role' => 'student'],
            ['code' => 'SV24', 'username' => 'dongnguyenthi', 'password' => Hash::make('54870'), 'role' => 'student'],
            ['code' => 'SV25', 'username' => 'myhoih', 'password' => Hash::make('01240'), 'role' => 'student'],
            ['code' => 'SV26', 'username' => 'cuongphan', 'password' => Hash::make('52001'), 'role' => 'student'],
            ['code' => 'SV27', 'username' => 'thuho', 'password' => Hash::make('20188'), 'role' => 'student'],
            ['code' => 'SV28', 'username' => 'taotran', 'password' => Hash::make('03358'), 'role' => 'student'],
            ['code' => 'SV29', 'username' => 'tamnguyen', 'password' => Hash::make('52221'), 'role' => 'student'],
            ['code' => 'SV30', 'username' => 'khanhdo', 'password' => Hash::make('00884'), 'role' => 'student'],
            ['code' => 'SV31', 'username' => 'hiepbui', 'password' => Hash::make('33669'), 'role' => 'student'],
            ['code' => 'SV32', 'username' => 'longtran', 'password' => Hash::make('11558'), 'role' => 'student'],
            ['code' => 'SV42', 'username' => 'thuatdo', 'password' => Hash::make('88997'), 'role' => 'student'],
            ['code' => 'SV33', 'username' => 'ngocha', 'password' => Hash::make('11446'), 'role' => 'student'],
            ['code' => 'SV34', 'username' => 'tienphan', 'password' => Hash::make('87741'), 'role' => 'student'],
            ['code' => 'SV35', 'username' => 'manhnguyen', 'password' => Hash::make('66548'), 'role' => 'student'],
            ['code' => 'SV36', 'username' => 'loana', 'password' => Hash::make('77522'), 'role' => 'student'],
            ['code' => 'SV37', 'username' => 'nhungnguyen', 'password' => Hash::make('85011'), 'role' => 'student'],
            ['code' => 'SV38', 'username' => 'onho', 'password' => Hash::make('99885'), 'role' => 'student'],
            ['code' => 'SV39', 'username' => 'huyenho', 'password' => Hash::make('64855'), 'role' => 'student'],
            ['code' => 'SV40', 'username' => 'vannguyen', 'password' => Hash::make('00012'), 'role' => 'student'],
        ]);
    }
}
