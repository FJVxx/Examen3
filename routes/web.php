<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ManUser\Create;
use App\Http\Livewire\ManUser\Delete;
use App\Http\Livewire\ManUser\IndexUser;
use App\Http\Livewire\ManUser\Update;
use App\Http\Livewire\ManUser\View;
use App\Http\Livewire\ManUser\UserView;

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

Route::get('/Index', IndexUser::class)->name('man-user.index-user');

Route::get('/Index/Create', Create::class)->name('man-user.create');

Route::get('/Index/{us?}/Update', update::class)->name('man-user.update');

Route::get('/Index/View', view::class)->name('man-user.view');

Route::get('/Index/{us?}/Delete', delete::class)->name('man-user.delete');

Route::get('/Index/{us?}/show', UserView::class)->name('man-user.user-view');