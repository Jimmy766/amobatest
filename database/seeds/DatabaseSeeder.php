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
        $r=new RouteSeeder();
        // $this->call(UserSeeder::class);
        $this->call([
            RouteSeeder::class,
            CalendarSeeder::class,
            RouteDataSeeder::class,
            UserSeeder::class,
            UserPlanSeeder::class,
            DisabledDaySeeder::class,
            ServiceSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
