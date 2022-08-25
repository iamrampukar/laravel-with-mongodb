<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flightModel = Flight::get();
        return view('flight.index',compact('flightModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFlightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlightRequest $request)
    {
        $postData       = $request->validated();
        $flightModel    = Flight::create($postData);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return view('flight.show',compact('flight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        return view('flight.edit',compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlightRequest  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        $postData       = $request->validated();
        $flight->update($postData);
        return redirect()->route('flight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flight.index');
    }
}
