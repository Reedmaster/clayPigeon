<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PullsController;
use App\Http\Controllers\PullLikesController;
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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/pulls', [PullsController::class, 'index'])
        ->name('home');
    Route::post('/pulls', [PullsController::class, 'store']);

    Route::post('/pulls/{pull}/like', [PullLikesController::class, 'storeLike']);
    Route::post('/pulls/{pull}/dislike', [PullLikesController::class, 'storeDislike']);
    Route::delete('/pulls/{pull}/like', [PullLikesController::class, 'destroyLike']);
    Route::delete('/pulls/{pull}/dislike', [PullLikesController::class, 'destroyDislike']);
    
    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])
        ->name('follow');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])
        ->middleware('can:edit,user')
        ->name('profile.edit');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])
        ->middleware('can:edit,user');

    Route::get('/explore', ExploreController::class);
});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])
    ->name('profile');

Auth::routes();
