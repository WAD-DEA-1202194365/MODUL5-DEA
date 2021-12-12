<?php

use App\Models\patient;
use App\Models\vaccine;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerregister;
use App\Http\Controllers\patientregis;
use App\Http\Controllers\vaccineregis;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home',[
    "title" => "Home",
    "image" => "covid19.jpg"
    ]);
});

Route::get('/vaccine', function () {
    return view('vaccine',[
        "title" => "Vaccine"
    ]);
});

Route::get('/patient', function () {
    return view('patient',[
        "title" => "Patient"
    ]);
});



Route::get('/createp', [patientregis::class, 'index']);
Route::post('/createp', [patientregis::class, 'store']);

Route::get('/createv', [vaccineregis::class, 'index']);