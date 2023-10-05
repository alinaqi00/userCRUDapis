<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerCRUD;

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




// Create a new userCRUD
Route::post('/userCRUDs', [UserControllerCRUD::class, 'create']);

// Read all userCRUDs
Route::get('/userCRUDs', [UserControllerCRUD::class, 'index']);

// Read a specific userCRUD by ID
Route::get('/userCRUDs/{id}', [UserControllerCRUD::class, 'show']);

// Update a userCRUD by ID
Route::put('/userCRUDs/{id}', [UserControllerCRUD::class, 'update']);

// Delete a userCRUD by ID
Route::delete('/userCRUDs/{id}', [UserControllerCRUD::class, 'destroy']);
