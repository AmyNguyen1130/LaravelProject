<?php

use Illuminate\Database\Seeder;

class WatersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('waters')->insert([
            ['room_id' => 1, 'time' => '2019-03', 'old_number' => 120, 'new_number' => 150, 'price' => 50000, 'status' => '1'],
            ['room_id' => 2, 'time' => '2019-03', 'old_number' => 150, 'new_number' => 175, 'price' => 45000, 'status' => '1'],
            ['room_id' => 3, 'time' => '2019-03', 'old_number' => 180, 'new_number' => 210, 'price' => 50000, 'status' => '1'],
            ['room_id' => 4, 'time' => '2019-03', 'old_number' => 150, 'new_number' => 185, 'price' => 55000, 'status' => '1'],
            ['room_id' => 5, 'time' => '2019-03', 'old_number' => 130, 'new_number' => 160, 'price' => 50000, 'status' => '1'],
            ['room_id' => 6, 'time' => '2019-03', 'old_number' => 110, 'new_number' => 140, 'price' => 50000, 'status' => '1'],
            ['room_id' => 7, 'time' => '2019-03', 'old_number' => 150, 'new_number' => 190, 'price' => 60000, 'status' => '1'],
            ['room_id' => 8, 'time' => '2019-03', 'old_number' => 170, 'new_number' => 200, 'price' => 50000, 'status' => '1'],
            ['room_id' => 9, 'time' => '2019-03', 'old_number' => 120, 'new_number' => 150, 'price' => 50000, 'status' => '1'],
            ['room_id' => 10, 'time' => '2019-03', 'old_number' => 130, 'new_number' => 150, 'price' => 40000, 'status' => '1'],
            ['room_id' => 1, 'time' => '2019-05', 'old_number' => 150, 'new_number' => 180, 'price' => 35000, 'status' => '1'],
            ['room_id' => 2, 'time' => '2019-05', 'old_number' => 175, 'new_number' => 195, 'price' => 45000, 'status' => '1'],
            ['room_id' => 3, 'time' => '2019-05', 'old_number' => 210, 'new_number' => 250, 'price' => 50000, 'status' => '1'],
            ['room_id' => 4, 'time' => '2019-05', 'old_number' => 185, 'new_number' => 200, 'price' => 30000, 'status' => '1'],
            ['room_id' => 5, 'time' => '2019-05', 'old_number' => 160, 'new_number' => 180, 'price' => 35000, 'status' => '1'],
            ['room_id' => 6, 'time' => '2019-05', 'old_number' => 140, 'new_number' => 180, 'price' => 60000, 'status' => '1'],
            ['room_id' => 7, 'time' => '2019-05', 'old_number' => 190, 'new_number' => 210, 'price' => 30000, 'status' => '1'],
            ['room_id' => 8, 'time' => '2019-05', 'old_number' => 200, 'new_number' => 230, 'price' => 35000, 'status' => '1'],
            ['room_id' => 9, 'time' => '2019-05', 'old_number' => 150, 'new_number' => 180, 'price' => 45000, 'status' => '1'],
            ['room_id' => 10, 'time' => '2019-05', 'old_number' => 150, 'new_number' => 180, 'price' => 45000, 'status' => '1'],
            ['room_id' => 1, 'time' => '2019-07', 'old_number' => 180, 'new_number' => 200, 'price' => 30000, 'status' => '1'],
            ['room_id' => 2, 'time' => '2019-07', 'old_number' => 195, 'new_number' => 220, 'price' => 40000, 'status' => '1'],
            ['room_id' => 3, 'time' => '2019-07', 'old_number' => 250, 'new_number' => 275, 'price' => 45000, 'status' => '1'],
            ['room_id' => 4, 'time' => '2019-07', 'old_number' => 200, 'new_number' => 230, 'price' => 50000, 'status' => '1'],
            ['room_id' => 5, 'time' => '2019-07', 'old_number' => 180, 'new_number' => 210, 'price' => 50000, 'status' => '1'],
            ['room_id' => 6, 'time' => '2019-07', 'old_number' => 180, 'new_number' => 210, 'price' => 50000, 'status' => '1'],
            ['room_id' => 7, 'time' => '2019-07', 'old_number' => 210, 'new_number' => 250, 'price' => 60000, 'status' => '1'],
            ['room_id' => 8, 'time' => '2019-07', 'old_number' => 230, 'new_number' => 260, 'price' => 50000, 'status' => '1'],
            ['room_id' => 9, 'time' => '2019-07', 'old_number' => 180, 'new_number' => 190, 'price' => 60000, 'status' => '1'],
            ['room_id' => 10, 'time' => '2019-07', 'old_number' => 180, 'new_number' => 210, 'price' => 50000, 'status' => '1'],
        ]);
    }
}
