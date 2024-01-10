<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Basic example route to test the connection
Route::get('/test', function () {
    return response()->json(['message' => 'API is working correctly'], 200);
});

// Route for user authentication (login example)
Route::post('/login', 'AuthController@login');

// Routes for resources related to the "panel"
Route::middleware('auth:api')->group(function () {
    // Routes to handle resources in the "panel"
    Route::get('/panel', 'PanelController@index');
    Route::post('/panel', 'PanelController@store');
    Route::get('/panel/{id}', 'PanelController@show');
    Route::put('/panel/{id}', 'PanelController@update');
    Route::delete('/panel/{id}', 'PanelController@destroy');
});