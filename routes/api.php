<?php

use App\Http\Controllers\Api\OfficeController;
use App\Http\Controllers\Api\TransferController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//http://127.0.0.1:8000/api/transfersindex
Route::get('/transfersindex',[TransferController::class, 'index']);

//http://127.0.0.1:8000/api/transfersstore
Route::post('/transfersstore',[TransferController::class, 'store']);

//http://127.0.0.1:8000/api/transfersshow
Route::get('/transfersshow', [TransferController::class, 'show']);

//http://127.0.0.1:8000/api/transfersupdate/1
Route::patch('/transfersupdate/{id}',[TransferController::class, 'update']);

//http://127.0.0.1:8000/api/transfersdestroy/1
Route::post('/transfersdestroy/{id}',[TransferController::class, 'destroy']);

//http://127.0.0.1:8000/api/generate-token_api/1
Route::get('/generate-token_api/{id}',function($id){
    $user=User::findOrfail($id);
    if(!$user->token_api)
    {
        $user->token_api=Str::random(60);
        $user->save()  ;
    }
    return $user->token_api;
});


//Ofice
//http://127.0.0.1:8000/api/officeshow
Route::get('/officeshow', [OfficeController::class, 'show']);

