<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function events() {
        $events = Event::all();
        return view('pages/events')->with('events', $events);
    }

    public function schedule() {
        return view('pages/schedule');
    }

    public function home() {
        return view('pages/home');
    }
}
