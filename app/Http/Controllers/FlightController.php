<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    function ___costruct(){
        $this->middleware('auth');
    }

    function index(){
        return view('flights.index');
    }

    function create(){
        return view('flights.create');
    }

    function store(Request $request){
        $flight = new Flight();
        $flight->name = $request->name;
        $flight->airline = $request->airline;
        $flight->departure = $request->departure;
        $flight->arrival = $request->arrival;
        $flight->price = $request->price;
        $flight->save();
        return redirect()->route('flights.index');
    }
}
