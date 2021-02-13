<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
    return view('welcome');
});

Route::get('/blog', function () {
    $blogs = collect(glob(resource_path('views/blog/*.blade.php')))
        ->map(function ($blog) {
            $key = Str::of($blog)->before('.blade.php')->afterLast('/');
            return [
                'title' => (string) $key->replace('-', ' ')->title(),
                'route' => (string) $key,
            ];
        })
        ->toArray();

    return view('blog', ['blogs' => $blogs]);
})->name('blogIndex');


Route::get('/blog/{blog}', function ($blog) {
    return view('blog.' . $blog);
})->name('blogShow');


