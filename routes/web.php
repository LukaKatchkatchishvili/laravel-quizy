<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/about-me', function () {
    $info = [
        'first_name' => 'Luka',
        'last_name' => 'Katchkatchishvili',
        'age' => 21,
        'hobbies' => ['basketball', 'coding', 'music'],
    ];
    return response()->json($info);
});

Route::get('/fruits', function () {
    $info = [
        'field1' => 'apple',
        'field2' => 'banana',
    ];
    return response()->json($info);
});

Route::get('/coding-langs', function () {
    $info = [
        'field1' => 'python',
        'field2' => 'javascript',
    ];
    return response()->json($info);
});
Route::get('/names', function () {
    $info = [
        'name1' => 'luka',
        'name2' => 'iveri',
        'name3' => 'giorgi',
    ];
    return response()->json($info);
});
Route::get('/year', function () {
    $info = [
        'year' => 2023,
    ];
    return response()->json($info);
});

Route::post('/update-info', function () {
    $message = 'success';
    $response = ['message' => $message];
    return response()->json($response);
});

Route::put('/add-info', function () {
    $message = 'success';
    $response = ['message' => $message];
    return response()->json($response);
});

Route::delete('/delete-info', function () {
    $message = 'success delete';
    $response = ['message' => $message];
    return response()->json($response);
});