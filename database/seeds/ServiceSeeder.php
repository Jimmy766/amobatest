<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/services.json");
        $data = collect(json_decode($json))->first();
        foreach ($data as $obj) {
            DB::table('services')->insert([
                'id' => $obj->id,
                'external_id' => $obj->external_id,
                'external_budget_id' => $obj->external_budget_id,
                'external_route_id' => $obj->external_route_id,
                'track_id' => $obj->track_id,
                'name' => $obj->name,
                'notes' => $obj->notes,
                'timestamp' => $obj->timestamp,
                'arrival_address' => $obj->arrival_address,
                'arrival_timestamp' => $obj->arrival_timestamp,

                'departure_address' => $obj->departure_address,
                'departure_timestamp' => $obj->departure_timestamp,
                'capacity' => $obj->capacity,
                'confirmed_pax_count' => $obj->confirmed_pax_count,
                'reported_departure_timestamp' => $obj->reported_departure_timestamp,
                'reported_departure_kms' => $obj->reported_departure_kms,

                'reported_arrival_timestamp' => $obj->reported_arrival_timestamp,
                'reported_arrival_kms' => $obj->reported_arrival_kms,
                'reported_vehicle_plate_number' => $obj->reported_vehicle_plate_number,
                'status' => $obj->status,
                'status_info' => $obj->status_info,
                'reprocess_status' => $obj->reprocess_status,
                'return' => $obj->return,
                'created' => $obj->created,
                'modified' => $obj->modified,

                'synchronized_downstream' => $obj->synchronized_downstream,
                'synchronized_upstream' => $obj->synchronized_upstream,
                'province_id' => $obj->province_id,
                'sale_tickets_drivers' => $obj->sale_tickets_drivers,
                'notes_drivers' => $obj->notes_drivers,
                'itinerary_drivers' => $obj->itinerary_drivers,
                'cost_if_externalized' => $obj->cost_if_externalized
            ]);
        }
    }
}
