<?php

use App\Http\Controllers\HeroController;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/heroes', [HeroController::class, 'index']);

Route::get('/code', function(){
    $heroes = Hero::all();
    foreach ($heroes as $key => $hero) {
        if(substr_count($hero->name, '-') > 0){
            $lc = strtolower($hero->name);
            $exp = explode(" ",$lc);
            $imp = implode("_", $exp);
        }else{
            $lc = strtolower($hero->name);
            $exp = explode(" ",$lc);
            $imp = implode("_", $exp);
        }
        
        
        $hero->code = $imp;

        $hero->save();
    }
});
