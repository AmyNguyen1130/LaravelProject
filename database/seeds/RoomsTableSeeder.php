<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('rooms')->insert([
       	['name'=>'206','floor'=>2,'number_of_members'=>8],
       	['name'=>'207','floor'=>2,'number_of_members'=>7],
       	['name'=>'208','floor'=>2,'number_of_members'=>9],
       	['name'=>'209','floor'=>2,'number_of_members'=>8],
       	['name'=>'210','floor'=>2,'number_of_members'=>9],
       	['name'=>'211','floor'=>3,'number_of_members'=>8],
       	['name'=>'212','floor'=>3,'number_of_members'=>8],
       	['name'=>'306','floor'=>3,'number_of_members'=>8],
       	['name'=>'307','floor'=>3,'number_of_members'=>9],
       	['name'=>'308','floor'=>3,'number_of_members'=>8],
    }
}
