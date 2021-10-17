<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// public routes

// Route::get('/students',[StudentController::class,'index']);
// Route::get('/student/{id}',[StudentController::class,'show']);
// Route::post('/students',[StudentController::class,'store']);
// Route::put('/student/{id}',[StudentController::class,'update']);
// Route::delete('/student/{id}',[StudentController::class,'destroy']);
// Route::get('/students/search/{city}',[StudentController::class,'search']);

    // Route::resource('students',StudentController::class)



Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);


// public
     Route::get('/students',[StudentController::class,'index']);
     Route::get('/student/{id}',[StudentController::class,'show']);
     Route::get('/students/search/{city}',[StudentController::class,'search']);

// partially protected


// protected
// Group middleware
Route::middleware(['auth:sanctum'])->group(function(){

     Route::post('/students',[StudentController::class,'store']);
     Route::put('/student/{id}',[StudentController::class,'update']);
     Route::delete('/student/{id}',[StudentController::class,'destroy']);

     Route::post('/logout',[UserController::class,'logout']);

});
 




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/students',function(){
//     return "All Student Info API";
// });


// protected Routes 
// Route::middleware('auth:sanctum')->get('/students',[StudentController::class,'index']);
// Route::middleware('auth:sanctum')->get('/student/{id}',[StudentController::class,'show']);
