<?php


Route::group([
    'namespace' => 'Softce\Sitemap\Http\Controllers',
    'prefix' => 'admin/sitemap'
    ],function(){

    Route::get('/create', ['as' => 'create', 'uses' => 'SitemapController@create']);

});