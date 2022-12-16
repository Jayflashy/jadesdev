<?php

use App\Http\Controllers\{
    HomeController,
    SettingController
};
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

Auth::routes();

Route::controller(HomeController::class)->middleware('traffic')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'send_contact')->name('contact.send');
    
});

Route::get('/jayflash', [HomeController::class, 'admin_login'])->middleware('guest')->name('admin.login');
Route::get('/lolade', [HomeController::class, 'admin_logout'])->name('admin.logout');
Route::post('/jayflash', [HomeController::class, 'login_jayflash'])->name('admin.logins');

// ADmin routes
Route::controller(SettingController::class)->as('admin.')->middleware('admin')->prefix('admin/')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/profile', 'profile')->name('profile');
    Route::post('/profile', 'update_profile')->name('profile.update');
    Route::get('settings', 'settings')->name('settings');
    Route::post('settings', 'update_settings')->name('settings.update');
    Route::get('reviews', 'reviews')->name('review');
    Route::post('review', 'create_review')->name('review.create');
    Route::post('review/{id}', 'update_review')->name('review.update');
    Route::get('review/del/{id}', 'delete_review')->name('review.delete');

    Route::get('projects', 'projects')->name('projects');
    Route::post('project', 'create_project')->name('project.create');
    Route::post('project/{id}', 'update_project')->name('project.update');
    Route::get('project/del/{id}', 'delete_project')->name('project.delete');
    // sections
    Route::post('section', 'update_section')->name('section.update');
    Route::get('section/about', 'about_section')->name('section.about');
    Route::get('section/why', 'why_section')->name('section.why');
    Route::get('section/service', 'service_section')->name('section.service');
    Route::get('section/banner', 'banner_section')->name('section.banner');
    Route::get('section/faq', 'faq_section')->name('section.faq');

    Route::get('contacts', 'contacts')->name('contacts');
    Route::get('settings/email', 'email_settings')->name('email_settings');
    Route::post('settings/email', 'update_email_settings')->name('email.update');
});