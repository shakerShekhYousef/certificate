<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\ArabicFrontController;

Route::get('/ar', [ArabicFrontController::class, 'home_ar'])->name('front.home_ar');
//About
Route::get('ar/about',[ArabicFrontController::class,'about_ar'])->name('front.about_ar');
//Contact us
Route::get('ar/contact_us',[ArabicFrontController::class,'contact_us'])->name('front.contact_us_ar');
//News
Route::get('ar/news',[ArabicFrontController::class,'news_ar'])->name('front.news_ar');
//Show news
Route::get('ar/news/details/{blog}',[ArabicFrontController::class,'show_news_ar'])->name('front.news_details_ar');
//Verify Certificate
Route::get('ar/verify_certificate',[ArabicFrontController::class,'verify_certificate_ar'])->name('front.certificate_ar');
//search certificate
Route::post('ar/verify_certificate/search',[ArabicFrontController::class,'search_certificate'])->name('certificate.search_ar');
Route::get('ar/prnpriview/{class}/{roll_no}',[ArabicFrontController::class,'print'])->name('print_ar');
//Search blog
Route::get('ar/news/search',[ArabicFrontController::class,'searchBlog'])->name('news.searchBlog_ar');
Route::get('ar/news/archive',[ArabicFrontController::class,'searchDate'])->name('news.searchDate_ar');
//program
Route::get('ar/professional_details',[ArabicFrontController::class,'programAr'])->name('front.programAr');
//send contact us
Route::post('ar/contact_us/send',[ArabicFrontController::class,'contact_us_send'])->name('front.contact_us_send_ar');
