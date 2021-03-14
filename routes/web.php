<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    $table = collect([
        0=>['id'=>1, 'utilizator'=>'John Doe','email'=>'john@email.com', 'rol'=>'Administrator'],
     //   1=>['id'=>2, 'utilizator'=>'Will Andersen','email'=>'will@email.com', 'rol'=>'User']
    ]);

    return view('welcome', ['tables'=>$table]);
});

