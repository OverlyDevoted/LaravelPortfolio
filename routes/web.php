<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('records', [
        'heading' => 'Latest portfolio',
        'listings' => [
            [
                'id'=>1,
                'title'=>'Portfolio one',
                'description'=>'A portfolio item'
            ],
            [
                'id'=>2,
                'title'=>'Portfolio two',
                'description'=>'A portfolio item that is much more than portfolio item 1'
            ]
        ]
    ]);
});
