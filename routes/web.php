<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return redirect()->to('admin/contacts');
});

Route::resource('admin/contacts', 'ContactController');

Auth::routes();


