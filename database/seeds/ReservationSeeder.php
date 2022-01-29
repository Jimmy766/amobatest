<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/reservations.json");
        $data = collect(json_decode($json));
        foreach ($data->first() as $obj) {
            DB::table('reservations')->insert([
                'id' => $obj->id,
                'user_plan_id' => $obj->user_plan_id,
                'route_id' => $obj->route_id,
                'track_id' => $obj->track_id,
                'reservation_start' => $obj->reservation_start,
                'reservation_end' => $obj->reservation_end,
                'route_stop_origin_id' => $obj->route_stop_origin_id,
                'route_stop_destination_id' => $obj->route_stop_destination_id,
                'created_at' => $obj->created_at,
                'updated_at' => $obj->updated_at,
                'deleted_at' => $obj->deleted_at
            ]);
        }
    }
}
