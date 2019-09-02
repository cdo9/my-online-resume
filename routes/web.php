<?php

Route::get('switch-locale/{locale}', 'LocalizationController@index')->name('switch-locale');
Route::get('switch-theme/{theme}', 'ThemeController@index')->name('switch-theme');
Route::get('', 'CvController@index')->name('home');
