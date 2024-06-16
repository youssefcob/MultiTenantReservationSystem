<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::post('/smth', function () {
            return response()->json([
                'message' => 'This is your multi-tenant application.',
                'tenant_id' => tenant('id'),
            ]);
        });
    });
}