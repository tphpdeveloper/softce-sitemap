<?php echo '<?xml version="1.0" encoding="UTF-8"?>
'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<sitemap>
    <loc>{{ env('APP_SITEMAP') }}/sitemaps/sitemap-category.xml</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
</sitemap>
@foreach($categories as $category)
<sitemap>
    <loc>{{ env('APP_SITEMAP') }}/sitemaps/sitemap-category-{{ ($category->id) }}.xml</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
</sitemap>
@endforeach
</sitemapindex>