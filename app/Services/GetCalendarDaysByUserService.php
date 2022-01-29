<?php

namespace App\Services;

use App\Http\Resources\ReservationResource;
use App\Reservation;
use App\User;
use App\UserPlan;

class GetCalendarDaysByUserService
{
    public function execute(User $user){
        $plans= UserPlan::query()->where('user_id',$user->id)->get(['id']);
        $reservations= Reservation::query()->whereIn('user_plan_id',$plans)->get();
        return ReservationResource::collection($reservations);
    }
}