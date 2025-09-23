<?php

namespace App\Helpers;

use App\Models\ContentBlock;
use App\Models\Page;
use App\Models\Media;

class CmsHelper
{
    /**
     * Get content block by key
     */
    public static function getContent($key, $default = '')
    {
        $block = ContentBlock::active()->byKey($key)->first();
        return $block ? $block->content : $default;
    }

    /**
     * Get content block image by key
     */
    public static function getContentImage($key, $default = '')
    {
        $block = ContentBlock::active()->byKey($key)->first();
        if ($block && $block->image) {
            return asset('manage/img/content_blocks/' . $block->image);
        }
        return $default;
    }

    /**
     * Get page by slug
     */
    public static function getPage($slug)
    {
        return Page::active()->bySlug($slug)->first();
    }

    /**
     * Get media by category
     */
    public static function getMedia($category, $limit = null)
    {
        $query = Media::active()->byCategory($category);
        
        if ($limit) {
            return $query->limit($limit)->get();
        }
        
        return $query->get();
    }

    /**
     * Get media by ID
     */
    public static function getMediaById($id)
    {
        return Media::active()->find($id);
    }

    /**
     * Get all content blocks as array
     */
    public static function getAllContent()
    {
        return ContentBlock::active()->pluck('content', 'key')->toArray();
    }

    /**
     * Get hero content
     */
    public static function getHeroContent()
    {
        return [
            'title' => self::getContent('hero_title', 'Welcome to Thrawaat'),
            'subtitle' => self::getContent('hero_subtitle', 'Your trusted partner in business solutions'),
            'image' => self::getContentImage('hero_image', asset('design/front/img/hero-bg.jpg'))
        ];
    }

    /**
     * Get footer content
     */
    public static function getFooterContent()
    {
        return [
            'copyright' => self::getContent('footer_copyright', '© 2025 by THRAWAAT INT\'L INVESTMENT CORP'),
            'address' => self::getContent('contact_address', 'Egypt Office: 39 Autostrad Rd. Maadi, Cairo, Egypt.'),
            'phone' => self::getContent('contact_phone', '+20 223589181'),
            'email' => self::getContent('contact_email', 'info@thrawaat.com')
        ];
    }
}
