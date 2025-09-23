<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\ContentBlock;
use App\Models\Media;

class CmsSeeder extends Seeder
{
    public function run()
    {
        // Create sample pages
        $pages = [
            [
                'slug' => 'home',
                'title' => 'Home',
                'hero_title' => 'Welcome to Thrawaat',
                'hero_subtitle' => 'Your trusted partner in business solutions',
                'meta_description' => 'Thrawaat International Investment Corporation - Leading business solutions provider',
                'meta_keywords' => 'business, investment, solutions, thrawaat',
                'content' => '<p>Welcome to our website. We provide comprehensive business solutions.</p>',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'slug' => 'about',
                'title' => 'About Us',
                'hero_title' => 'About Thrawaat',
                'hero_subtitle' => 'Learn more about our company and mission',
                'meta_description' => 'Learn about Thrawaat International Investment Corporation and our mission',
                'meta_keywords' => 'about, company, mission, thrawaat',
                'content' => '<p>We are a leading business solutions provider with years of experience.</p>',
                'is_active' => true,
                'sort_order' => 2
            ]
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }

        // Create sample content blocks
        $contentBlocks = [
            [
                'key' => 'hero_title',
                'title' => 'Main Hero Title',
                'content' => 'Welcome to Thrawaat International Investment Corporation',
                'type' => 'text',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'hero_subtitle',
                'title' => 'Hero Subtitle',
                'content' => 'Your trusted partner in comprehensive business solutions',
                'type' => 'text',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'about_text',
                'title' => 'About Us Text',
                'content' => 'We are a leading business solutions provider with years of experience in various industries.',
                'type' => 'text',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'contact_address',
                'title' => 'Contact Address',
                'content' => 'Egypt Office: 39 Autostrad Rd. Maadi, Cairo, Egypt.',
                'type' => 'text',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'key' => 'footer_copyright',
                'title' => 'Footer Copyright',
                'content' => '© 2025 by THRAWAAT INT\'L INVESTMENT CORP',
                'type' => 'text',
                'is_active' => true,
                'sort_order' => 5
            ]
        ];

        foreach ($contentBlocks as $block) {
            ContentBlock::create($block);
        }

        // Create sample media entries
        $mediaItems = [
            [
                'filename' => 'hero-bg.jpg',
                'original_name' => 'hero-background.jpg',
                'path' => 'media/hero-bg.jpg',
                'mime_type' => 'image/jpeg',
                'size' => 1024000,
                'alt_text' => 'Hero background image',
                'category' => 'hero',
                'is_active' => true
            ],
            [
                'filename' => 'about-image.jpg',
                'original_name' => 'about-us.jpg',
                'path' => 'media/about-image.jpg',
                'mime_type' => 'image/jpeg',
                'size' => 512000,
                'alt_text' => 'About us image',
                'category' => 'about',
                'is_active' => true
            ]
        ];

        foreach ($mediaItems as $media) {
            Media::create($media);
        }
    }
}