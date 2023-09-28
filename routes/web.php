<?php

use App\Livewire\Blog;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\OurMission;
use App\Livewire\Professional;
use App\Livewire\Register;
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

Route::get('/', Home::class);
Route::get('/professional', Professional::class);
Route::get('/contact-us', Contact::class);
Route::get('/blog', Blog::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
