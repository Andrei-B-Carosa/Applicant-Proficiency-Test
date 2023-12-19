<?php

use App\Http\Controllers\AuthController\Login as LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicantController\Page as ApplicantPage;
use App\Http\Controllers\ApplicantController\PageData as ApplicantPageData;

use App\Http\Controllers\ApplicantController\Action\Create as ApplicantCreate;
use App\Http\Controllers\ApplicantController\Action\Update as ApplicantUpdate;
use App\Http\Controllers\ApplicantController\Action\Delete as ApplicantDelete;

use App\Http\Controllers\AdminController\Page as AdminPage;

Route::prefix('apt')->group(function () {

    Route::get('/', function(){ return redirect()->route('applicant.home'); });

    // Route::controller(LoginController::class)->group(function () {

    //     Route::group(['prefix'=>'mis','middleware'=>['prevent.authenticated']],function(){
    //         Route::get('/', 'index');
    //     });

    //     Route::group(['middleware'=>['check.throttle']],function(){
    //         Route::post('/login', 'login')->name('login');
    //         Route::post('logout', 'logout')->name('logout');
    //     });

    // });

    Route::group(['middleware'=>['prevent.authenticated']],function(){

        Route::controller(ApplicantPage::class)->group(function () {

            Route::post('/page', 'page');

            Route::get('/home', 'index')->name('applicant.home');
            Route::get('/typing-test', 'index');
            Route::get('/excel-test',  'index');
        });

        Route::post('page-data',[ApplicantPageData::class,'index']);

        Route::post('editor-create',[ApplicantCreate::class,'index']);
        Route::post('editor-create',[ApplicantUpdate::class,'index']);
        Route::post('editor-create',[ApplicantDelete::class,'index']);

    });

    // Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function() {

    //     Route::controller(AdminPage::class)->group(function () {

    //         Route::post('/page-content', 'page_content');

    //         Route::get('/dashboard', 'index');

    //     });

    // });

});


