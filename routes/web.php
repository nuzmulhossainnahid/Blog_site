<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//User
Route::get('/', [UserController::class,'index']);
Route::get('/home', [UserController::class,'index']);




//Admin
//Authors

Route::get('/authors', [AdminController::class,'authors']);
Route::get('/createAuthors', [AdminController::class,'createAuthors']);
Route::post('/createAuthorsFrom', [AdminController::class,'createAuthorsFrom']);
Route::get('/editAuthor/{id}', [AdminController::class,'editAuthor']);
Route::post('/editAuthorsFrom/{id}', [AdminController::class,'editAuthorsFrom']);
Route::get('/deleteAuthor/{id}', [AdminController::class,'deleteAuthor']);

//Post

Route::get('/post', [AdminController::class,'post']);
Route::get('/createPost', [AdminController::class,'createPost']);
Route::post('/createPostFrom', [AdminController::class,'createPostFrom']);
Route::get('/editPost/{id}', [AdminController::class,'editPost']);
Route::post('/editPostFrom/{id}', [AdminController::class,'editPostFrom']);
Route::get('/AuthorId/{AuthorId}', [AdminController::class,'AuthorId']);
Route::get('/deletePost/{id}', [AdminController::class,'deletePost']);
Route::get('/holdPost/{id}', [AdminController::class,'holdPost']);
Route::get('/postPost/{id}', [AdminController::class,'postPost']);

//Facebook
Route::get('/facebook', [AdminController::class,'facebook']);
Route::get('/createFacebook', [AdminController::class,'createFacebook']);
Route::post('/createFacebookFrom', [AdminController::class,'createFacebookFrom']);
Route::get('/editFacebook/{id}', [AdminController::class,'editFacebook']);
Route::post('/editFacebookFrom/{id}', [AdminController::class,'editFacebookFrom']);
Route::get('/deleteFacebook/{id}', [AdminController::class,'deleteFacebook']);

//socialLink
Route::get('/socialLink', [AdminController::class,'socialLink']);
Route::get('/createSocialLink', [AdminController::class,'createSocialLink']);
Route::post('/createSocialFrom', [AdminController::class,'createSocialFrom']);
Route::get('/editSocialLink/{id}', [AdminController::class,'editSocialLink']);
Route::post('/editSocialFrom/{id}', [AdminController::class,'editSocialFrom']);
Route::get('/deleteSocialLink/{id}', [AdminController::class,'deleteSocialLink']);

//messageView
Route::get('/messageView', [AdminController::class,'messageView']);

//Slider
Route::get('/slider', [AdminController::class,'slider']);

Route::get('/createSlider', [AdminController::class,'createSlider']);
Route::post('/createSliderFrom', [AdminController::class,'createSliderFrom']);
Route::get('/editSlider/{id}', [AdminController::class,'editSlider']);
Route::post('/editSliderFrom/{id}', [AdminController::class,'editSliderFrom']);
Route::get('/deleteSlider/{id}', [AdminController::class,'deleteSlider']);
//Single Post
Route::get('/singlePost/{id}/{AuthorId}', [UserController::class,'singlePost']);
Route::post('/commentFrom/{id}', [UserController::class,'commentFrom']);
//Read More

Route::get('/readMore', [UserController::class,'readMore']);
//Subscribe
Route::post('/Subscribe', [UserController::class,'Subscribe']);
//contact
Route::get('/contact', [UserController::class,'contact']);
Route::post('/sendContact', [UserController::class,'sendContact']);