<?php
use Src\Route;

Route::add('GET', '/divisions', [Controller\Site::class, 'divisions'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/update_premises', [Controller\PremiseView::class, 'update_premises'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_premises', [Controller\PremiseView::class, 'add_premises'])
    ->middleware('auth');
Route::add('GET', '/premises', [Controller\PremiseView::class, 'premises'])
    ->middleware('auth');
Route::add(['GET', 'POST'],'/add_divisions', [Controller\Site::class, 'add_divisions'])
    ->middleware('auth');
Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/go', [Controller\Site::class, 'index'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/user', [Controller\Site::class, 'user']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);