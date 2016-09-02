<?php

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    $data = [
        'title'=>'heck this email',
        'content'=>' How to send email from laravel via mailgun'
        
        ];
        Mail::send('emails.test',$data, function($message) {

            $message->to('mariusz.tripler@gmail.com','Mariusz')->subject('Testing email features');

        });
    
});
