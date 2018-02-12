<?php


Route::group([
    'namespace' => 'Softce\Sitemap\Http\Controllers',
    'prefix' => 'admin/sitemap',
    'middleware' => ['web']
    ],function(){

    Route::get('/create', ['as' => 'admin.sitemap.create', 'uses' => 'SitemapController@create']);

});