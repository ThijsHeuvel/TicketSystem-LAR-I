<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function events() {
        $events = Event::where('starts_at', '>', now())->get();// laat alleen de events zien die nog moeten komen
        return view('pages/events', [
            'events' => $events
        ]);
    }

    public function schedule() {
        return view('pages/schedule');
    }

    public function home() {
        return view('pages/home');
    }
}
