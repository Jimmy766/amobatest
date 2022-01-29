<?php

namespace App\Http\Controllers;

use App\Services\CheckRouteCapacityService;
use Illuminate\Http\Request;
use App\Route;


class RouteController extends Controller
{
    /**
     * @var CheckRouteCapacityService
     */
    private $checkRouteCapacityService;

    public function __construct(CheckRouteCapacityService $checkRouteCapacityService)
    {

        $this->checkRouteCapacityService = $checkRouteCapacityService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = Route::all();
        return response()->json($route);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = Route::create($request->all());
        return response()->json($route);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return response()->json($route);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $route = $route->update($request->all());
        return response()->json($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route = $route->delete();
        return response()->json($route);
    }

    public function checkCapacity(Route $route)
    {
        return response()->json($this->checkRouteCapacityService->execute($route));
    }
}


