<?php

namespace App\Http\Controllers;

use App\Services\GetCalendarDaysByUserService;
use App\User;
use Illuminate\Http\Request;
use App\Calendar;


class CalendarController extends Controller
{

    /**
     * @var GetCalendarDaysByUserService
     */
    private $getCalendarDaysByUserService;

    public function __construct(GetCalendarDaysByUserService $getCalendarDaysByUserService)
    {

        $this->getCalendarDaysByUserService = $getCalendarDaysByUserService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendar = Calendar::all();
        return response()->json($calendar);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calendar = Calendar::create($request->all());
        return response()->json($calendar);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        return response()->json($calendar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        $calendar = $calendar->update($request->all());
        return response()->json($calendar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        $calendar = $calendar->delete();
        return response()->json($calendar);
    }

    public function getCalendarDaysByUser(User $user)
    {
        return $this->getCalendarDaysByUserService->execute($user);
    }
}


