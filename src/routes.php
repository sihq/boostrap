<?php

Route::get('{slug?}',function(){
    return view('bootstrap::app');
})->where('slug', '(?!api|reactive).*(?<!js|css|json|html|txt|xml|webmanifest|jpg|gif|png|svg)')->middleware('web');

