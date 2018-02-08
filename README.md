*Sitemap*

This plugin not multiusage. It's only our cms on laravel

##How to use##

```php

**1.**
//In modules/mage2/eccommerce/src/AdminMenu/Provider.php in block **System**

$sitemap = new AdminMenu();
$sitemap->key('sitemap')
    ->label('Сгенерировать SITEMAP')
    ->route('admin.sitemap.index')
    ->icon('fa-map');
$systemMenu->subMenu('sitemap',$sitemap);

**2.**
//Create controller in modules/mage2/eccommerce/src/Http/Controllers/Admin/SiteMapController.php
//In controller needed create method index()

namespace Mage2\Ecommerce\Http\Controllers\Admin;

use Mage2\Ecommerce\Models\Database\Category;
use Softce\Sitemap\Sitemap;


class SiteMapController extends AdminController
{
    public function index(){
        $sitemap = new Sitemap(Category::all());
        return $sitemap->create();
    }

}

**3.**
//In modules/mage2/eccommerce/routes/web.php in groupe admin write
 Route::get('/sitemap', ['as' => 'admin.sitemap.index', 'uses' => 'SiteMapController@index']);


```

