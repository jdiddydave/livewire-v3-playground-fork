<?php

use App\Livewire\Main;
use App\Livewire\Sample;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('login', fn () => Blade::render(<<<'HTML'
<html>
    <body>
        You must login.
    </body>
</html>
HTML));
Route::get('sample', Sample::class);
Route::get('/', Main::class);

// Route::prefix('test')
//     ->group(function() {
//         Livewire::setUpdateRoute(function($handle) {
//             return Route::post('/customother/livewire/new', $handle)->middleware('auth');
//         });

//     });
