<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\Main;
use App\Http\Controllers\NavFooter;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [Main::class,'index'])->name('home');

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

// BO - Contact
Route::get('/bo/contact', [ContactController::class,'index']);
Route::post('/updateInfo', [ContactController::class,'update']);

// BO - NavFooter
Route::get('/bo/navfooter', [NavFooter::class,'index']);
Route::post('/updateFooter', [NavFooter::class,'updateFooter']);
Route::post('/createFooterLink', [NavFooter::class,'store']);
Route::get('/deleteFooterLink/{id}', [NavFooter::class,'destroy']);
Route::get('/editFooterLink/{id}', [NavFooter::class,'edit']);
Route::post('/updateFooterLink/{id}', [NavFooter::class,'updateFooterLink']);
Route::get('/deleteNavLink/{id}', [NavFooter::class,'destroyNav']);
Route::get('/editNavLink/{id}', [NavFooter::class,'editNav']);
Route::post('/updateNavLink/{id}', [NavFooter::class,'updateNav']);
Route::post('/createNavLink', [NavFooter::class,'storeNav']);
Route::post('/updateLogo', [NavFooter::class,'updateLogo']);

// BO - Portfolio
Route::get('/bo/portfolio', [PortfolioController::class,'index']);
Route::post('/updateTitlePortfolio', [PortfolioController::class,'updateTitle']);
Route::get('/deleteGenrePortfolio/{id}', [PortfolioController::class,'destroyFilter']);
Route::post('/createFilterPortfolio', [PortfolioController::class,'storeFilter']);
Route::get('/editGenrePortfolio/{id}', [PortfolioController::class,'editGenre']);
Route::post('/updateGenrePortfolio/{id}', [PortfolioController::class,'updateGenre']);
Route::get('/editProjectPortfolio/{id}', [PortfolioController::class,'editProject']);
Route::post('/updateProjectPortfolio/{id}', [PortfolioController::class,'updateProject']);
Route::post('/createProjectPortfolio', [PortfolioController::class,'storeProject']);
Route::get('/deleteProjectPortfolio/{id}', [PortfolioController::class,'destroyProject']);