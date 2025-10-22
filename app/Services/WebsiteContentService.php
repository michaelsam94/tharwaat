<?php

namespace App\Services;

use App\Models\WebsiteContent;
use App\Models\Slider;
use App\Models\Section;
use Illuminate\Support\Facades\Cache;

class WebsiteContentService
{
    /**
     * Get content by key with caching
     */
    public static function getContent($key, $default = '')
    {
        return Cache::remember("content.{$key}." . app()->getLocale(), 300, function () use ($key, $default) {
            $content = WebsiteContent::active()->byKey($key)->first();
            if ($content) {
                $locale = app()->getLocale();
                $contentField = 'content_' . $locale;
                
                // Check if the content field exists and is not empty
                if (isset($content->$contentField) && !empty($content->$contentField)) {
                    return $content->$contentField;
                }
                
                // Fallback to English if current locale content is empty
                return $content->content_en ?? $default;
            }
            return $default;
        });
    }

    /**
     * Get content for a specific page
     */
    public static function getPageContent($page)
    {
        return Cache::remember("page.content.{$page}", 60, function () use ($page) {
            return WebsiteContent::active()->byPage($page)->orderBy('sort_order')->get();
        });
    }

    /**
     * Get content for a specific section
     */
    public static function getSectionContent($page, $section)
    {
        return Cache::remember("section.content.{$page}.{$section}", 60, function () use ($page, $section) {
            return WebsiteContent::active()->byPage($page)->bySection($section)->orderBy('sort_order')->get();
        });
    }

    /**
     * Get active sliders
     */
    public static function getSliders()
    {
        return Cache::remember('sliders.active', 300, function () {
            return Slider::active()->orderBy('sort_order')->get();
        });
    }

    /**
     * Get sections for a page
     */
    public static function getPageSections($page)
    {
        return Cache::remember("page.sections.{$page}", 60, function () use ($page) {
            return Section::active()->byPage($page)->orderBy('sort_order')->get();
        });
    }

    /**
     * Get section by name
     */
    public static function getSection($page, $name)
    {
        return Cache::remember("section.{$page}.{$name}", 60, function () use ($page, $name) {
            return Section::active()->byPage($page)->byName($name)->first();
        });
    }

    /**
     * Clear all content cache
     */
    public static function clearCache()
    {
        Cache::flush();
    }
    
    /**
     * Clear image-related caches
     */
    public static function clearImageCaches()
    {
        // Clear all content caches that might contain image URLs
        $contentKeys = WebsiteContent::where('type', 'image')->pluck('key');
        foreach ($contentKeys as $key) {
            self::clearContentCache($key);
        }
        
        // Clear sliders cache
        Cache::forget('sliders.active');
        
        // Clear all page caches
        $pages = WebsiteContent::distinct()->pluck('page');
        foreach ($pages as $page) {
            self::clearPageCache($page);
        }
    }

    /**
     * Clear cache for specific page
     */
    public static function clearPageCache($page)
    {
        Cache::forget("page.content.{$page}");
        Cache::forget("page.sections.{$page}");
        
        // Clear individual section caches
        $sections = WebsiteContent::where('page', $page)->distinct()->pluck('section');
        foreach ($sections as $section) {
            Cache::forget("section.content.{$page}.{$section}");
        }
    }

    /**
     * Clear cache for specific content key
     */
    public static function clearContentCache($key)
    {
        // Clear cache for all locales
        $locales = ['en', 'ar', 'bg'];
        foreach ($locales as $locale) {
            Cache::forget("content.{$key}.{$locale}");
        }
        
        // Clear related caches
        $content = WebsiteContent::where('key', $key)->first();
        if ($content) {
            // Clear page and section caches
            self::clearPageCache($content->page);
            
            // Clear sliders cache if it's a slider-related content
            if (strpos($key, 'slider') !== false) {
                Cache::forget('sliders.active');
            }
        }
    }

    /**
     * Get content with fallback to language files
     */
    public static function getContentWithFallback($key, $default = '')
    {
        $content = self::getContent($key, $default);
        
        // If no content found in database, try language file
        if (empty($content) && $default) {
            $content = __($key);
        }
        
        return $content ?: $default;
    }
}
