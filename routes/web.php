<?php
    Route::get('/home', function(){
        return view('home');
    });

    Route::resource('projects', 'ProjectsController');
?>