<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tentang', 'AboutController@index')->name('about');

Route::get('/laporan', 'LaporanController@index')->name('laporan.index');
Route::get('/laporan/detail/{laporan}', 'LaporanController@detail')->name('laporan.detail');
Route::get('/laporan/add', 'LaporanController@add')->name('laporan.add');
Route::post('/laporan/create', 'LaporanController@create')->name('laporan.create');

Route::get('/laporan/admin', 'LaporanController@admin')->name('laporan.admin');
Route::post('/tanggapan/create', 'TanggapanController@create')->name('tanggapan.create');

Auth::routes();