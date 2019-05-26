<?php

use Illuminate\Database\Seeder;

class ElectricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('electrics')->insert([
            ['room_id' => 1, 'time' => '2019-01', 'old_number' => 130, 'new_number' => 192, 'price' => 120000, 'status' => '1'],
            ['room_id' => 2, 'time' => '2019-01', 'old_number' => 150, 'new_number' => 215, 'price' => 145000, 'status' => '1'],
            ['room_id' => 3, 'time' => '2019-01', 'old_number' => 180, 'new_number' => 250, 'price' => 17000, 'status' => '1'],
            ['room_id' => 4, 'time' => '2019-01', 'old_number' => 150, 'new_number' => 215, 'price' => 145000, 'status' => '1'],
            ['room_id' => 5, 'time' => '2019-01', 'old_number' => 130, 'new_number' => 192, 'price' => 120000, 'status' => '1'],
            ['room_id' => 6, 'time' => '2019-01', 'old_number' => 110, 'new_number' => 155, 'price' => 100000, 'status' => '1'],
            ['room_id' => 7, 'time' => '2019-01', 'old_number' => 150, 'new_number' => 215, 'price' => 145000, 'status' => '1'],
            ['room_id' => 8, 'time' => '2019-01', 'old_number' => 170, 'new_number' => 235, 'price' => 165000, 'status' => '1'],
            ['room_id' => 9, 'time' => '2019-01', 'old_number' => 120, 'new_number' => 180, 'price' => 110000, 'status' => '1'],
            ['room_id' => 10, 'time' => '2019-01', 'old_number' => 170, 'new_number' => 235, 'price' => 165000, 'status' => '1'],
            ['room_id' => 11, 'time' => '2019-01', 'old_number' => 1110, 'new_number' => 1202, 'price' => 350000, 'status' => '1'],
            ['room_id' => 1, 'time' => '2019-02', 'old_number' => 192, 'new_number' => 250, 'price' => 120000, 'status' => '1'],
            ['room_id' => 2, 'time' => '2019-02', 'old_number' => 215, 'new_number' => 285, 'price' => 145000, 'status' => '1'],
            ['room_id' => 3, 'time' => '2019-02', 'old_number' => 250, 'new_number' => 290, 'price' => 17000, 'status' => '1'],
            ['room_id' => 4, 'time' => '2019-02', 'old_number' => 215, 'new_number' => 285, 'price' => 145000, 'status' => '1'],
            ['room_id' => 5, 'time' => '2019-02', 'old_number' => 192, 'new_number' => 250, 'price' => 120000, 'status' => '1'],
            ['room_id' => 6, 'time' => '2019-02', 'old_number' => 155, 'new_number' => 210, 'price' => 100000, 'status' => '1'],
            ['room_id' => 7, 'time' => '2019-02', 'old_number' => 215, 'new_number' => 285, 'price' => 145000, 'status' => '1'],
            ['room_id' => 8, 'time' => '2019-02', 'old_number' => 235, 'new_number' => 300, 'price' => 165000, 'status' => '1'],
            ['room_id' => 9, 'time' => '2019-02', 'old_number' => 180, 'new_number' => 245, 'price' => 110000, 'status' => '1'],
            ['room_id' => 10, 'time' => '2019-02', 'old_number' => 300, 'new_number' => 350, 'price' => 165000, 'status' => '1'],
            ['room_id' => 11, 'time' => '2019-02', 'old_number' => 1202, 'new_number' => 1350, 'price' => 315000, 'status' => '1'],
            ['room_id' => 1, 'time' => '2019-03', 'old_number' => 250, 'new_number' => 300, 'price' => 120000, 'status' => '1'],
            ['room_id' => 2, 'time' => '2019-03', 'old_number' => 285, 'new_number' => 330, 'price' => 145000, 'status' => '1'],
            ['room_id' => 3, 'time' => '2019-03', 'old_number' => 250, 'new_number' => 290, 'price' => 17000, 'status' => '1'],
            ['room_id' => 4, 'time' => '2019-03', 'old_number' => 285, 'new_number' => 330, 'price' => 145000, 'status' => '1'],
            ['room_id' => 5, 'time' => '2019-03', 'old_number' => 192, 'new_number' => 250, 'price' => 120000, 'status' => '1'],
            ['room_id' => 6, 'time' => '2019-03', 'old_number' => 155, 'new_number' => 210, 'price' => 100000, 'status' => '1'],
            ['room_id' => 7, 'time' => '2019-03', 'old_number' => 285, 'new_number' => 330, 'price' => 145000, 'status' => '1'],
            ['room_id' => 8, 'time' => '2019-03', 'old_number' => 350, 'new_number' => 400, 'price' => 165000, 'status' => '1'],
            ['room_id' => 9, 'time' => '2019-03', 'old_number' => 245, 'new_number' => 295, 'price' => 110000, 'status' => '1'],
            ['room_id' => 10, 'time' => '2019-03', 'old_number' => 350, 'new_number' => 400, 'price' => 97000, 'status' => '1'],
            ['room_id' => 11, 'time' => '2019-03', 'old_number' => 1350, 'new_number' => 1550, 'price' => 410000, 'status' => '1']
        ]);
    }
}
