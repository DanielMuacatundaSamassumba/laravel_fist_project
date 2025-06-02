<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::get('/user', function (Response $response): JsonResponse|mixed {
    return response()->json(
        [
            'name' =>"Daniel Samassumba",
            'email'=>"danielsamassumba@gmail.com",
            "password"=>"1324354645"
       ], 200);
});
