<?php
    Route::get('/home', function(){
        return view('home');
    });

    Route::resource('projects', 'ProjectsController');
?>
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
