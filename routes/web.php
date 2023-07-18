<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\HomeController;

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
include_route_files(__DIR__ . '/arabic/');

Auth::routes();

Route::get('/', [FrontController::class, 'home_en'])->name('front.home');
Route::get('/admin', [HomeController::class, 'index'])->name('home');
//Blog routes
Route::resource('blogs',BlogController::class)->except(['index','destroy'])
    ->middleware('auth');
Route::get('blogs_list',[BlogController::class,'blog_list'])->name('blogs_list');
Route::post('blogs_delete',[BlogController::class,'delete_blog'])->name('blogs_delete');
//Certificate Routes
Route::resource('certificates',CertificateController::class)->except(['index','destroy'])
    ->middleware('auth');
Route::get('certificates_list',[CertificateController::class,'certificate_list'])->name('certificates_list');
Route::post('certificates_delete',[CertificateController::class,'delete_certificate'])->name('certificates_delete');
//Comment Routes
Route::resource('comments',CommentController::class);
//About
Route::get('about',[FrontController::class,'about_en'])->name('front.about_en');
//Contact us
Route::get('contact_us',[FrontController::class,'contact_us'])->name('front.contact_us');
//News
Route::get('news',[FrontController::class,'news_en'])->name('front.news_en');
//Show news
Route::get('news/details/{blog}',[FrontController::class,'show_news'])->name('front.news_details');
//Verify Certificate
Route::get('verify_certificate',[FrontController::class,'verify_certificate_en'])->name('front.certificate_en');
//search certificate
Route::post('verify_certificate/search',[FrontController::class,'search_certificate'])->name('certificate.search');
Route::get('/prnpriview/{class}/{roll_no}',[FrontController::class,'print'])->name('print');
//Search blog
Route::get('news/search',[FrontController::class,'searchBlog'])->name('news.searchBlog');
Route::get('news/archive',[FrontController::class,'searchDate'])->name('news.searchDate');
//program
Route::get('professional_details',[FrontController::class,'programEn'])->name('front.programEn');
//send contact us
Route::post('contact_us/send',[FrontController::class,'contact_us_send'])->name('front.contact_us_send');
