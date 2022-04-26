<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'nome' => 'Mattia'
    ];
    return view('home', $data);
})->name('home');

Route::get('/shop', function () {
    $data = [
        'products' => [
            'Lampada',
            'Mouse',
            'Tastiera',
            'Monitor',
            'Custodia per Portatile'
        ]
    ];
    return view('shop', $data);
})->name('shop');

Route::get('/contacts', function () {
    $data = [
        'contacts' => [
            [
                'type' => 'Tel',
                'all' => [
                    3456244542,
                    3424543632,
                    2562457456
                ]
            ],
            [
                'type' => 'E-Mails',
                'all' => [
                    'dontknow@bool.com',
                    'prova1@bool.com',
                    'mailacaso@bool.com'
                ]
            ],
            [
                'type' => 'Socials',
                'all' => [
                    'Instagram',
                    'Facebook',
                    'Twitter'
                ]
            ]
        ]
    ];
    return view('contacts', $data);
})->name('contacts');

