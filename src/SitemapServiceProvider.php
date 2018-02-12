<?php

namespace Softce\Sitemap;

use Illuminate\Support\ServiceProvider;


class SitemapServiceProvider extends ServiceProvider
{

    public function boot(){
        require_once(dirname(__DIR__).'\Http\routes.php');
        $this->loadViewsFrom(dirname(__DIR__).'\views', 'sitemap');
    }

    public function register(){
        $this->app->bind('Softce\Sitemap', function ($app) {
            return new Sitemap; 
        });
    }

}