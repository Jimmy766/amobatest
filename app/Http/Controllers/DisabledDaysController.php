<?php

namespace App\Http\Controllers;

use App\DisabledDay;
use Illuminate\Http\Request;

class DisabledDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disabled_days = DisabledDay::all();
        return response()->json($disabled_days);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disabled_day = DisabledDay::create($request->all());
        return response()->json($disabled_day);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DisabledDay  $disabledDay
     * @return \Illuminate\Http\Response
     */
    public function show(DisabledDay $disabledDay)
    {
        return response()->json($disabledDay);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DisabledDay  $disabledDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisabledDay $disabledDay)
    {
        $disabled_day = $disabledDay->update($request->all());
        return response()->json($disabled_day);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DisabledDay  $disabledDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisabledDay $disabledDay)
    {
        $disabled_day = $disabledDay->delete();
        return response()->json($disabled_day);
    }
}




