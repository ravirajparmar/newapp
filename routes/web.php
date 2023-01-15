<?php

use App\Models\EnimohUser;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('test',function(){

    $allUser = User::all();
    dd($allUser->count());
    $users = EnimohUser::all();
    // $users = EnimohUser::where('app_plan','Boost')->get();
    //$users = EnimohUser::count();
    return $users;
    //dd($users);
});
