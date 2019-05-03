<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoomsTableSeeder::class);
        $this->call(EducatorsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(IssusesTableSeeder::class);
        $this->call(MisconductsTableSeeder::class);
        $this->call(ElectricsTableSeeder::class);
        $this->call(WatersTableSeeder::class);
        $this->call(KitchenExpensesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
