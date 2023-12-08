<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class TicketsController extends Controller
{

    /**
     * @param $event_id
     * 
     * Display the order page to order a ticket for event
     */
    public function order($event_id)
    {
        $event = Event::findOrFail($event_id);
        return view('pages.events.orderTicket')->with('event', $event);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
