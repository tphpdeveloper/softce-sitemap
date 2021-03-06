<?php

namespace Softce\Sitemap;
use File;

class Sitemap
{

    private $categories = null;
    private $list_product_category = '';


    public function __construct($category) {
        $this->categories = $category;
    }

    public function create(){
        $this->sitemap();
        $this->sitemapCategory();
        $this->sitemapCategoryProducts();

        return redirect()->back()->with('notificationText', 'SITEMAP успешно сгенерирован');
    }

    public function sitemap(){
        $name_file = 'sitemap.xml';
        $bytes_written = File::put(
                public_path('/'.$name_file),
                view('sitemap::sitemap', [
                        'categories' => $this->categories
                ])->render()
        );

        if ($bytes_written === false)
        {
            echo 'Ошибка записи в файл '.$name_file;
        }
    }


    public function sitemapCategory(){
        $name_file = 'sitemap-category.xml';
        $bytes_written = File::put(
                public_path('/sitemaps/'.$name_file),
                view('sitemap::sitemap-category')
                    ->with('categories', $this->categories)
                    ->render()
        );

        if ($bytes_written === false)
        {
            echo 'Ошибка записи в файл '.$name_file;
        }
    }

    public function sitemapCategoryProducts(){

        foreach($this->categories as $category){
            //if($category->id == 4) continue;

            $name_file = 'sitemap-category-'.($category->id).'.xml';
            $category->products()->chunk(100, function($products){

                $this->list_product_category .= view('sitemap::category_products.body')
                    ->with('products', $products)
                    ->render()
                    ;

            });

            $head = view('sitemap::category_products.head', [
                            'content' => $this->list_product_category
                    ])->render();
            $this->list_product_category = '';


            $bytes_written = File::put(public_path('/sitemaps/'.$name_file), $head);

            if ($bytes_written === false)
            {
                echo 'Ошибка записи в файл '.$name_file;
                echo '<br />';
            }
        }
    }



}
?>