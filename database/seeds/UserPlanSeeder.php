<?php

use Illuminate\Database\Seeder;

class UserPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/user_plans.json");
        $data = collect(json_decode($json))->first();
        foreach ($data as $obj) {
            DB::table('user_plans')->insert([
                'id' => $obj->id,
                'user_id' => $obj->user_id,
                'currency_id' => $obj->currency_id,
                'next_user_plan_id' => $obj->next_user_plan_id,
                'start_timestamp' => $obj->start_timestamp,
                'end_timestamp' => $obj->end_timestamp,
                'renewal_timestamp' => $obj->renewal_timestamp,
                'renewal_price' => $obj->renewal_price,
                'requires_invoice' => $obj->requires_invoice,
                'status' => $obj->status,

                'created' => $obj->created,
                'modified' => $obj->modified,
                'financiation' => $obj->financiation,
                'status_financiation' => $obj->status_financiation,
                'language' => $obj->language,
                'nif' => $obj->nif,

                'business_name' => $obj->business_name,
                'pending_payment' => $obj->pending_payment,
                'date_max_payment' => $obj->date_max_payment,
                'proxim_start_timestamp' => $obj->proxim_start_timestamp,
                'proxim_end_timestamp' => $obj->proxim_end_timestamp,
                'proxim_renewal_timestamp' => $obj->proxim_renewal_timestamp,
                'proxim_renewal_price' => $obj->proxim_renewal_price,
                'credits_return' => $obj->credits_return,
                'company_id' => $obj->company_id,

                'cancel_employee' => $obj->cancel_employee,
                'force_renovation' => $obj->force_renovation,
                'date_canceled' => $obj->date_canceled,
                'amount_confirm_canceled' => $obj->amount_confirm_canceled,
                'credit_confirm_canceled' => $obj->credit_confirm_canceled,
                'cost_center_id' => $obj->cost_center_id
            ]);
        }
    }
}
