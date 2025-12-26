<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


Route::get('/', function () {
    return view('index');
});


Route::get('/create-id', function () {
    return view('welcome');
});


Route::post('/add', function (Request $request) {

    DB::table('demo')->insert([
        'name'     => $request->name,
        'age'      => $request->age,
        'phone'    => $request->phone,
        'role'     => $request->role,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/');
});


Route::get('/login', function () {
    return view('login');
});


Route::post('/login', function (Request $request) {

    $user = DB::table('demo')
        ->where('phone', $request->phone)
        ->first();

    if ($user && Hash::check($request->password, $user->password)) {

        // store user id in session
        session(['user_id' => $user->id]);

        return view('page1');
    } else {
        return back()->with('error', 'Invalid phone number or password');
    }
});
Route::get('/page2', function () {


    if (!session()->has('user_id')) {
        return redirect('/login');
    }

    $userId = session('user_id');

    $user = DB::table('demo')->where('id', $userId)->first();


    $tasks = DB::table('tasks')
        ->where('user_id', $userId)
        ->get();

    return view('page2', compact('user', 'tasks'));
});

Route::post('/add-task', function (Request $request) {

    if (!session()->has('user_id')) {
        return redirect('/login');
    }

    DB::table('tasks')->insert([
        'user_id' => session('user_id'),
        'task'    => $request->task
    ]);

    return redirect('/page2');
});

