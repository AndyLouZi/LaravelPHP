<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//--CREATE a link--//
/*Route::view('listCRUD','listCRUD');
Route::get('listCRUD',[UserController::class,'Show']);*/
Route::get('/home', function () {
    $users = User::all();
    return view('listCRUD')->with('users', $users);
});
//--GET LINK TO EDIT--//
Route::get('/home/{link_id?}', function ($link_id) {
    $link = User::find($link_id);
    return Response::json($users);
});

//--UPDATE a link--//
Route::put('/home/{link_id?}', function (Request $request, $link_id) {
    $link = User::find($link_id);
    $link->name = $request->name;
    $link->email = $request->email;
    $link->save();
    return Response::json($users);
});

//--DELETE a link--//
Route::delete('/home/{link_id?}', function ($link_id) {
    $link = User::destroy($link_id);
    return Response::json($users);
});


