<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/users.json");
        $data = collect(json_decode($json))->first();
        foreach ($data as $item) {
            DB::table('users')->insert([
                'id' => $item->id,
                'first_name' => $item->first_name,
                'last_name' => $item->last_name,
                'phone_number' => $item->phone_number,
                'picture' => $item->picture,
                'email' => $item->email,
                'password' => $item->password,
                'remember_token' => $item->remember_token,
                'last_online' => $item->last_online,
                'verification_code' => $item->verification_code,
                'new_email' => $item->new_email,
                'status' => $item->status,
                'first' => $item->first,
                'created' => $item->created,
                'modified' => $item->modified,
                'company_contact' => $item->company_contact,

                'credits' => $item->credits,
                'first_trip' => $item->first_trip,
                'incomplete_profile' => $item->incomplete_profile,
                'phone_verify' => $item->phone_verify,
                'token_auto_login' => $item->token_auto_login,
                'user_vertical' => $item->user_vertical,
                'language_id' => $item->language_id,
                'no_registered' => $item->no_registered,
                'deleted_at' => $item->deleted_at
            ]);
        }
    }
}
