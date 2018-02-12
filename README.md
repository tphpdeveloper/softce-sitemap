# Work with module create sitemap

**1.**
```php
//write to composer.json
"require": {
    ...
    "softce/sitemap" : "dev-master"
}

"autoload": {
    ... ,

    sr-4": {
        ... ,

        "Softce\\Sitemap\\" : "vendor/softce/sitemap/"
    }
}
```


**2.**
```php
//in console write

**composer update**
```


**3.**
```php
//in service provider config/app

'providers' => [
    ... ,
    Softce\Sitemap\SitemapServiceProvider::class,
]
```


**4.**
```php

//write to group System
modules\mage2\ecommerce\src\AdminMenu\Provider.php
$sitemap = new AdminMenu();
$sitemap->key('sitemap')
    ->label('Сгенерировать SITEMAP')
    ->route('admin.sitemap.create')
    ->icon('fa-map');
$systemMenu->subMenu('sitemap',$sitemap);
```

