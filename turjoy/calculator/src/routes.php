<?php

Route::get('calculator', function () {
    echo 'Hello from the outside!';
});

Route::get('add/{a}/{b}', 'Turjoy\Calculator\CalculatorController@add');

Route::get('subtract/{a}/{b}', 'Turjoy\Calculator\CalculatorController@subtract');

Route::get('multiply/{a}/{b}', 'Turjoy\Calculator\CalculatorController@multiply');

Route::get('division/{a}/{b}', 'Turjoy\Calculator\CalculatorController@divide');