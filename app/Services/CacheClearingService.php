<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;

class CacheClearingService
{
    /**
     * Clear all caches for instant image updates
     */
    public static function clearAllCaches()
    {
        // Clear Laravel caches
        Cache::flush();
        
        // Clear view cache
        Artisan::call('view:clear');
        
        // Clear config cache
        Artisan::call('config:clear');
        
        // Clear route cache
        Artisan::call('route:clear');
        
        // Clear application cache
        Artisan::call('cache:clear');
        
        // Clear compiled views
        Artisan::call('view:clear');
        
        // Clear opcache if available
        if (function_exists('opcache_reset')) {
            opcache_reset();
        }
    }
    
    /**
     * Clear image-related caches specifically
     */
    public static function clearImageCaches()
    {
        // Clear WebsiteContentService caches
        WebsiteContentService::clearImageCaches();
        
        // Clear all content caches
        WebsiteContentService::clearCache();
        
        // Clear additional Laravel caches
        Cache::flush();
        
        // Clear view cache to ensure updated images are displayed
        Artisan::call('view:clear');
    }
    
    /**
     * Clear caches for specific content type
     */
    public static function clearContentTypeCaches($type)
    {
        switch ($type) {
            case 'slider':
                Cache::forget('sliders.active');
                break;
            case 'website_content':
                WebsiteContentService::clearImageCaches();
                break;
            case 'page':
                // Clear all page-related caches
                $pages = \App\Models\WebsiteContent::distinct()->pluck('page');
                foreach ($pages as $page) {
                    WebsiteContentService::clearPageCache($page);
                }
                break;
            case 'section':
                // Clear all section-related caches
                $sections = \App\Models\Section::distinct()->pluck('page');
                foreach ($sections as $page) {
                    WebsiteContentService::clearPageCache($page);
                }
                break;
            case 'content_block':
                // Clear content block caches
                Cache::flush();
                break;
            case 'media':
                // Clear media-related caches
                Cache::flush();
                break;
        }
        
        // Always clear view cache for immediate reflection
        Artisan::call('view:clear');
    }
    
    /**
     * Clear caches after image update
     */
    public static function clearAfterImageUpdate($contentType = null)
    {
        // Clear image-specific caches
        self::clearImageCaches();
        
        // Clear content type specific caches if provided
        if ($contentType) {
            self::clearContentTypeCaches($contentType);
        }
        
        // Clear all caches for maximum compatibility
        self::clearAllCaches();
    }
}

