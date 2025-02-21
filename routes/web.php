<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms-view', [RoomController::class, 'show'])->name('rooms.show');
Route::get('/one-bedroom-apartment', [RoomController::class, 'showOneBed']);
Route::get('/two-bedroom-apartment', [RoomController::class, 'showTwoBed']);

Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/hotels/{hotel}', [PageController::class, 'hotelIndex'])->name('hotel.index');
Route::get('/cuisines', [PageController::class, 'cuisines'])->name('cuisines');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

Route::get('/our-hotels/{hotel}/rooms', [PageController::class, 'hotelRooms'])->name('hotel.rooms.index');
Route::get('/our-hotels/{hotel}/rooms/{category}', [PageController::class, 'hotelRoomCategory'])->name('hotel.rooms.show');
Route::get('/our-hotels/{hotel}/gallery', [PageController::class, 'hotelGallery'])->name('hotel.gallery');
Route::get('/our-hotels/{hotel}/reviews', [PageController::class, 'hotelReviews'])->name('hotel.reviews');
Route::get('/our-hotels/{hotel}/contact', [PageController::class, 'hotelContact'])->name('hotel.contact');

Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
