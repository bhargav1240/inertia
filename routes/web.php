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
    //2010-08-04
    $start_date = "01-01-2000";
    $end_date = "31-12-2010";
    $start_time = "13:00";
    $end_time = "14:02";
//    if($start_date != null && $end_date != null){
//        $temp = TimeTableInstance::whereBetween('date', [
//            date('Y-m-d', strtotime($start_date)),
//            date('Y-m-d', strtotime($end_date))
//        ])
//            ->orderBy('date')
//            ->get();
//    }
    $temp = TimeTableInstance::
    whereBetween('date', [
        date("Y-m-d", strtotime($start_date)),
        date("Y-m-d", strtotime($end_date))
    ])
    ->whereBetween('start_time', [
        date("H:i", strtotime($start_time)),
        date("H:i", strtotime($end_time))
    ])
        ->whereBetween('end_time', [
            date("H:i", strtotime($start_time)),
            date("H:i", strtotime($end_time))
        ])
        ->orderBy('date')
        ->get();
    return response()->json([
        'count' => $temp->count(),
        'data' => $temp,
    ]);
});
