<?php

Route::get('dokulib','Dyandra\DokuLib\DokuLibController@index');
Route::post('doku/payment','Dyandra\DokuLib\DokuLibController@payment');
Route::post('doku/payment/credit-card','Dyandra\DokuLib\DokuLibController@credit_card');
