<?php

use Illuminate\Support\Facades\Route;
use Squire\Models\Airline;
use Squire\Models\Airport;
use Squire\Models\Continent;
use Squire\Models\Country;
use Squire\Models\Currency;
use Squire\Models\GbCounty;
use Squire\Models\Region;
use Squire\Models\Timezone;

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

Route::get('/', function () {
    return view('welcome');

    // dd(
    //     // Airline::with(['country', 'continent'])->first()
    //     // Airport::with(['country', 'timezone'])->first()
    //     // Continent::with(['timezones'])->first()
    //     // Country::with(['airlines', 'airports', 'continent', 'currency', 'regions', 'timezones'])->first()
    //     // Currency::with('countries')->first()
    //     // GbCounty::with('region')->first()
    //     // Region::with('gbCounties')->first()
    //     // Timezone::where('code', 'like', 'Asia/%')->get()
    // );
});
