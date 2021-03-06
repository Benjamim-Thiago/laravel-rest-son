<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::resources([
        'products' => 'ProductController',
        'users' => 'UserController',
    ]);
});

Route::get('cors_example', function () {
    return ['status'=>'ok'];
});
