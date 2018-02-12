<?php echo '<?xml version="1.0" encoding="UTF-8"?>
'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
@forelse($categories as $category)
<url>
    <loc>{{ route('category.view', [$category->slug] ) }}</loc>
</url>
@empty
  Нет пользователей
@endforelse
</urlset>