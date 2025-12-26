<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::post('/add', function (Request $request) {
    DB::table('demo')->insert([
        'task' => $request->task
    ]);

    return redirect('/');
});
