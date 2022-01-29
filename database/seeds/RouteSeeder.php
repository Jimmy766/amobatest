<?php

use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/routes.json");
        $data = collect(json_decode($json))->first();
        foreach ($data as $obj) {
            DB::table('routes')->insert([
                'id' => $obj->id,
                'external_id' => $obj->external_id,
                'invitation_code' => $obj->invitation_code,
                'title' => $obj->title,
                'created_at' => $obj->start_timestamp,
                'updated_at' => $obj->end_timestamp
            ]);
        }
    }
}
