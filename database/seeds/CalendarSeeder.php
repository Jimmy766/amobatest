<?php

use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/calendar.json");
        $data = collect(json_decode($json));
        foreach ($data->first() as $obj) {
            DB::table('calendar')->insert([
                'id' => $obj->id,
                'calendar_id' => $obj->calendar_id,
                'name' => $obj->name,
                'created_at' => $obj->created_at,
                'updated_at' => $obj->updated_at
            ]);
        }
    }
}
