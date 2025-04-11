<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
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

Route::middleware('auth')->group(function () {
    // Route::get('/', [AuthController::class, 'index']);
    Route::get('/', [ItemController::class, 'index']);
    // Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('detail');
    Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('item.detail');
});


// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     // ImageControllerのリソースフルルーティング
//             // $attendance = DB::table('view_total_time as t')
//             // ->select('t.name','t.id')
//             // ->selectRaw('MIN(t.work_time) AS work_time')
//             // ->selectRaw('MIN(t.work_started_at) AS work_start_time')
//             // ->selectRaw('MAX(t.work_ended_at) AS work_end_time')
//             // ->selectRaw('sec_to_time(sum( time_to_sec(t.rest_time))) AS total_rest_time')
//             // ->where( 't.user_id', '=', Auth::user()->id )
//             // ->where( 't.work_date', '=', $current_date)
//             // ->groupBy('t.id')
//             // ->get();

//     Route::resource('/items', ItemController::class);
// });