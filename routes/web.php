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

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/','DashboardController@index');

Route::group(['prefix' => 'Database-handle'], function(){
//    Route::get('accordions', function () { return view('pages.basic-ui.accordions'); });
    Route::get('raw-materials-data-load', function () { return view('pages.Database-handle.raw-materials-data-load'); });
    Route::get('first-phase-data-load', function () { return view('pages.Database-handle.first-phase-data-load'); });
    Route::get('prediction-phase-data-load', function () { return view('pages.Database-handle.prediction-phase-data-load'); });
    Route::get('final-test-phase-data-load', function () { return view('pages.Database-handle.final-test-phase-data-load'); });
});

//Route::group(['prefix' => 'advanced-ui'], function(){
//    Route::get('dragula', function () { return view('pages.advanced-ui.dragula'); });
//    Route::get('clipboard', function () { return view('pages.advanced-ui.clipboard'); });
//    Route::get('context-menu', function () { return view('pages.advanced-ui.context-menu'); });
//    Route::get('popups', function () { return view('pages.advanced-ui.popups'); });
//    Route::get('sliders', function () { return view('pages.advanced-ui.sliders'); });
//    Route::get('carousel', function () { return view('pages.advanced-ui.carousel'); });
//    Route::get('loaders', function () { return view('pages.advanced-ui.loaders'); });
//    Route::get('tree-view', function () { return view('pages.advanced-ui.tree-view'); });
//});

//Route::group(['prefix' => 'forms'], function(){
//    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
//    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
//    Route::get('dropify', function () { return view('pages.forms.dropify'); });
//    Route::get('form-validation', function () { return view('pages.forms.form-validation'); });
//    Route::get('step-wizard', function () { return view('pages.forms.step-wizard'); });
//    Route::get('wizard', function () { return view('pages.forms.wizard'); });
//});

//Route::group(['prefix' => 'editors'], function(){
//    Route::get('text-editor', function () { return view('pages.editors.text-editor'); });
//    Route::get('code-editor', function () { return view('pages.editors.code-editor'); });
//});
//
Route::group(['prefix' => 'charts'], function(){
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('morris', function () { return view('pages.charts.morris'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('google-charts', function () { return view('pages.charts.google-charts'); });
    Route::get('sparklinejs', function () { return view('pages.charts.sparklinejs'); });
    Route::get('c3-charts', function () { return view('pages.charts.c3-charts'); });
    Route::get('chartist', function () { return view('pages.charts.chartist'); });
    Route::get('justgage', function () { return view('pages.charts.justgage'); });
});

Route::group(['prefix' => 'Raw_materials'], function(){
    Route::get('input-page-raw-materials', function () { return view('pages.Raw_materials.input-page-raw-materials'); });
//    Route::get('data-table', function () { return view('pages.tables.data-table'); });
//    Route::get('js-grid', function () { return view('pages.tables.js-grid'); });
//    Route::get('sortable-table', function () { return view('pages.tables.sortable-table'); });
});
Route::group(['prefix' => 'First-Phase'], function(){
    Route::get('input-page-first-phase', function () { return view('pages.First-Phase.input-page-first-phase'); });
//    Route::get('data-table', function () { return view('pages.tables.data-table'); });
//    Route::get('js-grid', function () { return view('pages.tables.js-grid'); });
//    Route::get('sortable-table', function () { return view('pages.tables.sortable-table'); });
});
Route::group(['prefix' => 'Prediction-Phase'], function(){
    Route::get('input-output-page-prediction', function () { return view('pages.Prediction-Phase.input-output-page-prediction'); });
//    Route::get('data-table', function () { return view('pages.tables.data-table'); });
//    Route::get('js-grid', function () { return view('pages.tables.js-grid'); });
//    Route::get('sortable-table', function () { return view('pages.tables.sortable-table'); });
});
Route::group(['prefix' => 'Final-Test-Phase'], function(){
    Route::get('input-page-final-test-phase', function () { return view('pages.Final-Test-Phase.input-page-final-test-phase'); });
    Route::post('input-page-final-test-phase', 'FinalTest@store');
});

Route::get('notifications', function () {
    return view('pages.notifications.index');
});




Route::group(['prefix' => 'user-pages'], function(){
    Route::get('login', function () { return view('pages.user-pages.login'); });
    Route::get('login-2', function () { return view('pages.user-pages.login-2'); });
    Route::get('multi-step-login', function () { return view('pages.user-pages.multi-step-login'); });
    Route::get('register', function () { return view('pages.user-pages.register'); });
    Route::get('register-2', function () { return view('pages.user-pages.register-2'); });
    Route::get('lock-screen', function () { return view('pages.user-pages.lock-screen'); });
});


//Route::group(['prefix' => 'general-pages'], function(){
//    Route::get('blank-page', function () { return view('pages.general-pages.blank-page'); });
//    Route::get('landing-page', function () { return view('pages.general-pages.landing-page'); });
//    Route::get('profile', function () { return view('pages.general-pages.profile'); });
//    Route::get('email-templates', function () { return view('pages.general-pages.email-templates'); });
//    Route::get('faq', function () { return view('pages.general-pages.faq'); });
//    Route::get('faq-2', function () { return view('pages.general-pages.faq-2'); });
//    Route::get('news-grid', function () { return view('pages.general-pages.news-grid'); });
//    Route::get('timeline', function () { return view('pages.general-pages.timeline'); });
//    Route::get('search-results', function () { return view('pages.general-pages.search-results'); });
//    Route::get('portfolio', function () { return view('pages.general-pages.portfolio'); });
//    Route::get('user-listing', function () { return view('pages.general-pages.user-listing'); });
//});


// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//// 404 for undefined routes
//Route::any('/{page?}',function(){
//    return View::make('pages.error-pages.error-404');
//})->where('page','.*');
