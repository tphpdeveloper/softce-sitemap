<?php

namespace Softce\Sitemap;

use Illuminate\Support\ServiceProvider;


class SitemapServiceProvider extends ServiceProvider
{

    public function boot(){
        require_once(__DIR__.'/Http/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'sitemap');
    }

    public function register(){
        $this->app['sitemap'] = $this->app->share(function(){
            return new Sitemap;
        });
    }

}