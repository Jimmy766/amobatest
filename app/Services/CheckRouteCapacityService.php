<?php

namespace App\Services;

use App\Reservation;
use App\Route;
use App\Service;


class CheckRouteCapacityService
{


    public function execute(Route $route){
        $service = Service::query()
            ->where('external_route_id', $route->external_id)
            ->where('status', '>', 0)
            ->first();
        if(is_null($service)){
            return false;
        }
        $reservations = Reservation::query()
            ->where('route_id', $route->id)
            ->count();
        return $service->capacity - $reservations>0;
    }
}