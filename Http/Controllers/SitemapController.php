<?php

namespace Softce\Sitemap\Http\Controller;

use Illuminate\Routing\Controller;


class SitemapController extends Controller
{

    public function index(){

        return view('sitema::index');

    }

}