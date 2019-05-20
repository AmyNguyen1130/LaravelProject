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
            ['email' => 'phuong.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'educator'],
            ['email' => 'ngoctai.dev@gmail.com', 'password' => Hash::make('password'), 'role' => 'educator'],
            ['email' => 'quyet.y@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'dieu.quach@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'ly.doan@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'van.ngo@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'manage'],
            ['email' => 'thuy.cao@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thinh.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'lam.dinh@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thiet.huynh@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'giang.tra@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'cam.ho@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'cuong.pham@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'tuan.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'tai.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'tao.ho@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'kiet.a@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thanh.dinh@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thao.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'ui.coor@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'nam.dang@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'phuc.dam@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'blir.y@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'hang.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'xuyen.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'dong.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'my.hoih@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'cuong.phan@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thu.ho@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'tao.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'tam.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'khanh.ho@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'hiep.bui@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'long.tran@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'thuat.do@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'ngoc.ha@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'tien.phan@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'manh.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'loan.a@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'nhung.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'on.ho@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'huyen.ho@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
            ['email' => 'van.nguyen@student.passerellesnumeriques.org', 'password' => Hash::make('password'), 'role' => 'student'],
        ]);
    }
}
