<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Lastest Headings',
        'listings' => [
            [
                'id' => 1,
                'title'=> 'Frontend Developer',
                'description' => 'Carry out all the responsibilities of a frontend developer'
            ],
            [
                'id' => 2,
                'title'=> 'Backend Developer',
                'description' => 'Carry out all the responsibilities of a backend developer'
            ]
        ]
    ]);
});
