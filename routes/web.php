<?php

use App\Http\Controllers\TimeTableInstanceController;
use App\Models\TimeTableInstance;
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

Route::get('/test', function () {
    $temp = TimeTableInstance::whereDate([
        ['date', '<', date('Y-m-d', strtotime("22-01-2021"))],
        ['date', '>', date('Y-m-d', strtotime("22-02-2021"))]
    ])->orderBy('date')->get();
    dd($temp);
});
