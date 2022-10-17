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
    return view('welcome');
});

// RETURN STRING
Route::get('coba', function(){
    return "Say Hallo";
});

// ARRAY JSON
Route::get('coba1', function(){
    return['rpl4', 'Ika Fathisna', 'absen 3'];
});

// JSON OBJEK
Route::get('coba2', function(){
    return[
        'Nama' => 'Ika Fathisna Mutmainah',
        'Kelas' => 'XII RPL 4',
        'NIS' => 3103120110
    ];
});

// OBJEK JSON, UBAH STATUS CODE
Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Ika Fathisna Mutmainah',
            'Kelas' => 'XII RPL 4',
            'NIS' => 3103120110
        ], 201
    );
});

Route::get('me', function(){
    return[
        'NIS' => 3103120110,
        'Nama' => 'Ika Fathisna Mutmainah',
        'Phone' => '082340208345',
        'Class' => 'XII RPL 4'
        
    ];
});