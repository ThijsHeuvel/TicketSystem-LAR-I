<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/home', [PagesController::class, 'home'])->name('home');

Route::get('/events', [PagesController::class, 'events'])->name('events');

Route::get('events/{id}/order', [TicketsController::class, 'order'])->middleware(['auth'])->name('events.orderticket');
Route::post('events/{id}/order', [TicketsController::class, 'store'])->middleware(['auth'])->name('events.storeorderticket');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){  // CRUD routes for events + Index
    Route::resource('events', EventsController::class);
    Route::get('/', [EventsController::class, 'index'])->name('events.index');
    
    Route::post('/events', [EventsController::class, 'store'])->name('events.store');
    Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
    Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');
    Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');   
    Route::put('/events/{id}/edit', [EventsController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('events.delete');
});



Route::get('/schedule', [PagesController::class, 'schedule'])->name('schedule');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
