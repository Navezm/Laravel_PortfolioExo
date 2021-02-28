<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\Main;
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

Route::get('/', [Main::class,'index']);

// BackOffice
Route::get('/bo', [BackOfficeController::class,'index']);

// BO - Hero
Route::get('/bo/home', [HeroController::class,'bo']);
Route::post('/createHeroLink', [HeroController::class,'store']);
Route::get('/editHeroLink/{id}', [HeroController::class,'editLink']);
Route::post('/updateHero', [HeroController::class,'updateHero']);
Route::post('/updateHeroLink/{id}', [HeroController::class,'updateLink']);
Route::get('/deleteHeroLink/{id}', [HeroController::class,'destroyLink']);

// BO - About
Route::get('/bo/about', [AboutController::class,'index']);
Route::post('/updateAbout', [AboutController::class,'updateAbout']);
Route::post('/createSkill', [AboutController::class,'create']);
Route::get('/deleteSkill/{id}', [AboutController::class,'destroy']);
Route::get('/editSkill/{id}', [AboutController::class,'edit']);
Route::post('/updateSkill/{id}', [AboutController::class,'updateSkill']);