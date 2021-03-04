<?php

use App\Http\Controllers\TimeTableInstanceController;
use App\Models\TimeTableInstance;
use Illuminate\Support\Facades\DB;
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

    $start_date = "13-01-2021";
    $end_date = "31-01-2021";
    $start_time = "00:00";
    $end_time = "23:59";

    $full_start_date_time = $start_date .' ' .$start_time;
    $full_end_date_time = $end_date .' ' .$end_time;

    $collection = TimeTableInstance::all();

    $filtered = $collection->filter(function ($value) use ($full_start_date_time, $full_end_date_time) {

        $value->date_time_start = $value->start_date . ' ' . $value->start_time;
        $value->date_time_end = $value->end_date . ' ' . $value->end_time;

        return $value->date_time_start >= date("Y-m-d H:i", strtotime($full_start_date_time)) && $value->date_time_end <= date("Y-m-d H:i", strtotime($full_end_date_time));
    });

    $temp = $filtered->all();

    return response()->json([
        'count' => count($temp),
        'data' => $temp,
    ]);
});
