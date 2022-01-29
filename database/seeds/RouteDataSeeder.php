<?php

use Illuminate\Database\Seeder;

class RouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/route_data.json");
        $data = collect(json_decode($json))->first();
        foreach ($data as $obj) {
            DB::table('routes_data')->insert([
                'id' => $obj->id,
                'route_id' => $obj->route_id,
                'calendar_id' => $obj->calendar_id,
                'vinculation_route' => $obj->vinculation_route,
                'route_circular' => $obj->route_circular,
                'date_init' => $obj->date_init,
                'date_finish' => $obj->date_finish,
                'mon' => $obj->mon,
                'tue' => $obj->tue,
                'wed' => $obj->wed,
                'thu' => $obj->thu,
                'fri' => $obj->fri,
                'sat' => $obj->sat,
                'sun' => $obj->sun,
                'created_at' => $obj->created_at,
                'updated_at' => $obj->updated_at
            ]);
        }
    }
}
