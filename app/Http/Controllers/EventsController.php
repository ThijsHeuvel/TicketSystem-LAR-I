<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        return view('dashboard.index')->with('events', $events);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:10',
            'location' => 'required',
            'starts_at' => 'required|date',
            'ends_at' => 'required|date',
            'price' => 'required|numeric'
        ]);

        $event = new Event();
        $event->name = $request->name;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->starts_at = $request->starts_at;
        $event->ends_at = $request->ends_at;
        $event->price = $request->price;

        $event->save();

        $events = Event::all();
        return view('dashboard.index')->with('events', $events);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);

        return view('dashboard/show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);

        return view('dashboard.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:10',
            'location' => 'required',
            'starts_at' => 'required|date',
            'ends_at' => 'required|date',
            'price' => 'required|numeric'
        ]);

        $event = Event::findOrFail($id);
        $event->name = $request->name;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->starts_at = $request->starts_at;
        $event->ends_at = $request->ends_at;
        $event->price = $request->price;

        $event->save();
        
        $events = Event::all();
        return view('dashboard.index')->with('events', $events);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
