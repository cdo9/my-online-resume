<?php

Route::get('switch-locale/{locale}', 'LocalizationController@index')->name('switch-locale');
Route::get('', 'CvController@index')->name('home');
