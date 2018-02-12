<?php

namespace Softce\Sitemap\Http\Controllers;

use Illuminate\Routing\Controller;
use Softce\Sitemap\Sitemap;
use Mage2\Ecommerce\Models\Database\Category;

class SitemapController extends Controller
{

    public function create(){
        $sitemap = new Sitemap(Category::all());
        return $sitemap->create();


    }

}