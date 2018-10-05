<?php

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

use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        $this->get('/', function () {
            return view('frontend.templates.welcome');
        });
    });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Auth::routes();

$this->get('/backend/dashboard', 'HomeController@index')->name('dashboard');

$this->post('/ajax_add_title','BackendController@ajax_add_title')->name('ajax_add_title');
$this->post('/ajax_add_question','BackendController@ajax_add_question')->name('ajax_add_question');
$this->post('/ajax_add_answers','BackendController@ajax_add_answers')->name('ajax_add_answers');

