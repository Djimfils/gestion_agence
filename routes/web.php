<?php
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Voyage;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/vehicules', function () {
    return Vehicule::with("Chauffeurs")->paginate(5);
});

Route::get('/chauffeurs', function () {
    return Vehicule::with("Vehicules")->paginate(5);
});
