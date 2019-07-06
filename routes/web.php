<?php

Route::middleware(['web', 'auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::namespace('Brackets\Media\Http\Controllers')->group(function () {
        Route::post('upload',                   'FileUploadController@upload')->name('craftable/media::upload');
        Route::get('view',                      'FileViewController@view')->name('craftable/media::view');
    });
});