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

use Illuminate\Support\Facades\Mail;

Route::get('/send', function () {


    $data=[
        'title'=>'Hi Buddy !',
        'content'=>'How Are you'
    ];

    Mail::send('emails.test', $data, function ($message) {
        $message->to('dilminasss.eshan.d@gmail.com','Eshan')->subject('Hi Buddy !!!');
    });
});
