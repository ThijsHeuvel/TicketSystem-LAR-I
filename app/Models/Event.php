<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events'; // Met ‘protected $table = ‘events’ zorg je ervoor dat dit model nu communiceert met de tabel ‘events’.
    
}
