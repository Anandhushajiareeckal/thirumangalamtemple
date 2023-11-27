<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/","App\Http\Controllers\FrontendController@index");
Route::get("/upadevas/{id}","App\Http\Controllers\FrontendController@upadevas");
Route::get("/temple","App\Http\Controllers\FrontendController@temple");
Route::get("/offerings","App\Http\Controllers\FrontendController@offerings");
Route::get("/poojas","App\Http\Controllers\FrontendController@pooja");
Route::get("/gallery","App\Http\Controllers\FrontendController@gallery");
Route::get("/events-news","App\Http\Controllers\FrontendController@events");
Route::get("/details/{id}","App\Http\Controllers\FrontendController@event_detail");
Route::get("/contact","App\Http\Controllers\FrontendController@contact");
Route::post("/enquiry","App\Http\Controllers\ContactController@enquiry");
Route::get("/festival","App\Http\Controllers\FrontendController@festival");
Route::get("/administration","App\Http\Controllers\FrontendController@administration");














Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get("/dashboard","App\Http\Controllers\IndexController@dashboard")->name('dashboard');
    Route::prefix('home')->group(function () {


        Route::get("/","App\Http\Controllers\IndexController@index")->name('banner_add');
        Route::post("/banner/add","App\Http\Controllers\IndexController@store")->name('banner');
        Route::get("/banner/list","App\Http\Controllers\IndexController@list")->name('banner_list');
        Route::get("/banner/{id}","App\Http\Controllers\IndexController@edit")->name('banner_edit');
        Route::put("/banner/edit/{id}","App\Http\Controllers\IndexController@update")->name('banner_update');
        Route::get("/banner/delete/{id}","App\Http\Controllers\IndexController@destroy")->name('banner_delete');


        Route::get("/service","App\Http\Controllers\IndexController@service_show")->name('service_list');
        Route::get("/service/add/{id}","App\Http\Controllers\IndexController@service_view")->name('service_add');
        Route::put("/service/store/{id}","App\Http\Controllers\IndexController@service_add")->name('service_store');


        Route::get("/upadevas/list","App\Http\Controllers\IndexController@upadevas")->name('upadevas_list');
        Route::get("/upadevas/add","App\Http\Controllers\IndexController@upadevas_view")->name('upadevas_view');
        Route::post("/upadevas/add","App\Http\Controllers\IndexController@upadevas_store")->name('upadevas_store');
        Route::get("/upadevas/edit/{id}","App\Http\Controllers\IndexController@upadevas_edit")->name('upadevas_edit');
        Route::put("/upadevas/update/{id}","App\Http\Controllers\IndexController@upadevas_update")->name('upadevas_update');
        Route::get("/upadevas/delete/{id}","App\Http\Controllers\IndexController@upadevas_delete")->name('upadevas_delete');
    });

    Route::prefix('temple')->group(function () {
        Route::get("/","App\Http\Controllers\TempleController@index")->name('temple');
        Route::put("/edit","App\Http\Controllers\TempleController@update")->name('temple_edit');
    });

    Route::prefix('offering')->group(function () {
        Route::get("/","App\Http\Controllers\OfferingController@index")->name('offering_list');
        Route::post("/store","App\Http\Controllers\OfferingController@store")->name('offering_store');
        Route::get("/edit/{id}","App\Http\Controllers\OfferingController@edit")->name('offering_edit');
        Route::put("/edit/{id}","App\Http\Controllers\OfferingController@update")->name('offering_update');
        Route::get("/delete/{id}","App\Http\Controllers\OfferingController@destroy")->name('offering_delete');
        Route::get("/details/{id}","App\Http\Controllers\OfferingController@offering_details")->name('offering_details');
        Route::get("/details/{id}/edit/{offer}","App\Http\Controllers\OfferingController@offering_detail_edit")->name('offering_detail_edit');
        Route::post("/details/store/{id}","App\Http\Controllers\OfferingController@offering_details_store")->name('offering_details_store');
        Route::put("/details/{id}/update/{offer}","App\Http\Controllers\OfferingController@offering_detail_update")->name('offering_detail_update');
        Route::get("/details/{id}/delete/{offer}","App\Http\Controllers\OfferingController@offering_detail_delete")->name('offering_detail_delete');
    });

    Route::prefix('poojas')->group(function () {
        Route::get("/","App\Http\Controllers\PoojasController@index")->name('poojas');
        Route::put("/update","App\Http\Controllers\PoojasController@update")->name('poojas_update');


    });

    Route::prefix('gallery')->group(function () {
        Route::get("/","App\Http\Controllers\GalleryController@index")->name('gallery');
        Route::get("/images/{id}","App\Http\Controllers\GalleryController@list")->name('gallery_list');
        Route::post("/store/{id}","App\Http\Controllers\GalleryController@store")->name('gallery_save');
        Route::get("/delete/{id}/{cat_id}","App\Http\Controllers\GalleryController@destroy")->name('gallery_delete');
        Route::post("/category/add","App\Http\Controllers\GalleryController@category")->name('category_add');
        Route::get("/category/edit/{id}","App\Http\Controllers\GalleryController@category_edit")->name('category_edit');
        Route::put("/category/update/{id}","App\Http\Controllers\GalleryController@category_update")->name('category_update');
        Route::get("/category/delete/{id}","App\Http\Controllers\GalleryController@category_delete")->name('category_delete');
    });

    Route::prefix('event')->group(function () {
        Route::get("/","App\Http\Controllers\EventController@index")->name('event');
        Route::get("/view","App\Http\Controllers\EventController@view")->name('event_view');
        Route::get("/edit/{id}","App\Http\Controllers\EventController@edit")->name('event_edit');
        Route::post("/store","App\Http\Controllers\EventController@store")->name('event_store');
        Route::post("/update/{id}","App\Http\Controllers\EventController@update")->name('event_update');
        Route::get("/delete/{id}","App\Http\Controllers\EventController@destroy")->name('event_delete');
    });
    Route::prefix('contact')->group(function () {
        Route::get("/","App\Http\Controllers\ContactController@index")->name('contact');
        Route::get("/enquiry","App\Http\Controllers\ContactController@enquiry_list")->name('enquiry_list');
        Route::get("/enquiry_delete{id}","App\Http\Controllers\ContactController@enquiry_delete")->name('enquiry_delete');
        Route::get("/enquiry_detail/{id}","App\Http\Controllers\ContactController@enquiry_detail")->name('enquiry_detail');
        Route::put("/update","App\Http\Controllers\ContactController@update")->name('contact_update');
    });
    Route::prefix('festival')->group(function () {
        Route::get("/","App\Http\Controllers\FestivalController@index")->name('festival');
        Route::put("/update","App\Http\Controllers\FestivalController@update")->name('festival_update');

    });
    Route::prefix('administration')->group(function () {
        Route::get("/","App\Http\Controllers\AdministeationController@index");
        Route::post("/store","App\Http\Controllers\AdministeationController@store")->name('administration_store');
        Route::put("/update/{id}","App\Http\Controllers\AdministeationController@update")->name('administration_update');
        Route::get("/content","App\Http\Controllers\AdministeationController@content")->name('administration_content');
        Route::put("/content/update","App\Http\Controllers\AdministeationController@content_update")->name('adminstration_content_edit');
    });

    Route::prefix('social')->group(function () {
        Route::get("/","App\Http\Controllers\SocialController@index");
        Route::get("/add","App\Http\Controllers\SocialController@add")->name('social_add');
        Route::post("/store","App\Http\Controllers\SocialController@store")->name('social_store');
        Route::get("{id}/edit","App\Http\Controllers\SocialController@edit")->name('social_edit');
        Route::put("/update/{id}","App\Http\Controllers\SocialController@update")->name('social_update');
    });

    Route::prefix('logo')->group(function () {
        Route::get("/","App\Http\Controllers\SettingsController@logo");
        Route::put("/update","App\Http\Controllers\SettingsController@update")->name('logo_update');

    });


})->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
