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
    $date = now();
    $str_time = strtotime("15-02-2021");
    $temp = TimeTableInstance::whereDate('created_at', '<', date('Y-m-d', $str_time))->orderBy('date')->get();
    dd($date, $str_time, $temp);
});
