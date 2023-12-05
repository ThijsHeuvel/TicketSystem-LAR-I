<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();

        $event->name = 'NK Atletiek';
        $event->description = 'Nederlands Kampioenschap Atletiek';
        $event->starts_at = '2021-06-25';
        $event->ends_at = '2021-06-27';
        $event->location = 'Utrecht';
        $event->price = 10.00;
        
        $event->save();

        $event = new Event();

        $event->name = 'NK Zwemmen';
        $event->description = 'Nederlands Kampioenschap Zwemmen';
        $event->starts_at = '2021-07-02';
        $event->ends_at = '2021-07-04';
        $event->location = 'Amsterdam';
        $event->price = 30.00;

        $event->save();

        $event = new Event();

        $event->name = 'NK Turnen';
        $event->description = 'Nederlands Kampioenschap Turnen';
        $event->starts_at = '2021-07-09';
        $event->ends_at = '2021-07-11';
        $event->location = 'Rotterdam';
        $event->price = 20.00;

        $event->save();
    }
}
