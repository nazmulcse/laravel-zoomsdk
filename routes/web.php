<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoChatController;
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

Route::get('/', [VideoChatController::class, 'index']);
Route::post('/join-meeting', [VideoChatController::class, 'joinMeeting']);
Route::get('/init-zoom', [VideoChatController::class, 'initZoom']);
Route::get('/meetingEnd', [VideoChatController::class, 'meetingEnd']);
Route::get('/getSignature', [VideoChatController::class, 'getSignature']);
