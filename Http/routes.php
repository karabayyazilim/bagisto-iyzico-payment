<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/iyzico-redirect', 'Webkul\IyzicoPayment\Http\Controllers\PaymentController@redirect')->name('iyzico.redirect');
    Route::get('/iyzico-success', 'Webkul\IyzicoPayment\Http\Controllers\PaymentController@success')->name('iyzico.success');
    Route::post('/iyzico-callback', 'Webkul\IyzicoPayment\Http\Controllers\PaymentController@callback')->name('iyzico.callback');
});