<?php

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    $data = [
        'title'=>'Czesc Aurelko',
        'content'=>'Sprawdz jak mozesz odebra ta nagrode:)'
        
        ];
        // Mail::send('emails.test',$data, function($message) {
        //     $message->to('mariusz.tripler@gmail.com','Mariusz')->subject('Wygralas buziaka');
        // });
    
});
