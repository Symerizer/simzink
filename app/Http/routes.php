<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {


    $client = new Tumblr\API\Client(
        env('TUMBLR_KEY_1'),env('TUMBLR_KEY_2'),env('TUMBLR_KEY_3'),env('TUMBLR_KEY_4')
    );

    return view('welcome')->with('client', $client);
});
