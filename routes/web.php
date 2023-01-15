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

Route::get('test2',function(){
    $response = Http::get('http://127.0.0.1:8000/graphql')
    ->withHeaders([ 
        'Accept'=> '*/*', 
        'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)', 
        'Content-Type'=> 'application/json', 
    ]);

    echo $response->body("{
        query{
            user(id:1){
              id,
              name
            }
          }
    }");
});

Route::get('test3',function(){
    echo "hello";
});
