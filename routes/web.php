<?php

use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/beranda_admin', function () {
    return view('beranda_admin');
});

Route::get('/belum_konfirmasi', function () {
    return view('belum_konfirmasi');
});

Route::get('/rekap', function () {
    return view('rekap');
});

Route::get('/sudah_konfirmasi', function () {
    return view('sudah_konfirmasi');
});

Route::get('/popup_konfirmasi', function () {
    return view('popup_konfirmasi');
});

Route::get('/popup_terima', function () {
    return view('popup_terima');
});

Route::get('/popup_tolak', function () {
    return view('popup_tolak');
});

Route::get('/popup_survey', function () {
    return view('popup_survey');
});