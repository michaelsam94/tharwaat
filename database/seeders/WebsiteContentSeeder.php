<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteContent;
use App\Models\Slider;
use App\Models\Section;

class WebsiteContentSeeder extends Seeder
{
    public function run()
    {
        // Create sample sliders
        Slider::create([
            'title_en' => 'Welcome to <span>Tharawat</span><br /><span>Investment Group</span>',
            'title_ar' => 'مرحباً بكم في <span>ثروات</span><br /><span>مجموعة الاستثمار</span>',
            'subtitle_en' => 'Building the future through strategic investments and innovative solutions',
            'subtitle_ar' => 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة',
            'description_en' => 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.',
            'description_ar' => 'نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.',
            'button_text_en' => 'Learn More',
            'button_text_ar' => 'اعرف المزيد',
            'button_link' => '/about-us',
            'image' => 'sliders/welcome-slider.jpg',
            'is_active' => true,
            'sort_order' => 1
        ]);

        // Create sample website content
        $contentData = [
            // Home page content
            [
                'key' => 'home.about.header',
                'page' => 'home',
                'section' => 'about',
                'type' => 'text',
                'content_en' => 'About Tharawat',
                'content_ar' => 'عن ثروات',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'home.about.title',
                'page' => 'home',
                'section' => 'about',
                'type' => 'text',
                'content_en' => 'Your Trusted Investment Partner',
                'content_ar' => 'شريكك الاستثماري الموثوق',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'home.about.text1',
                'page' => 'home',
                'section' => 'about',
                'type' => 'text',
                'content_en' => 'Professional and versatile technical and engineering capability.',
                'content_ar' => 'قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات.',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'home.about.text2',
                'page' => 'home',
                'section' => 'about',
                'type' => 'text',
                'content_en' => 'Diversified range of Products & Services.',
                'content_ar' => 'مجموعة متنوعة من المنتجات والخدمات.',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'key' => 'home.about.text3',
                'page' => 'home',
                'section' => 'about',
                'type' => 'text',
                'content_en' => 'Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.',
                'content_ar' => 'التركيز على أسماء العلامات التجارية عالية الجودة والابتكار الراسخ ورضا العملاء.',
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'key' => 'home.about.button',
                'page' => 'home',
                'section' => 'about',
                'type' => 'text',
                'content_en' => 'Read More',
                'content_ar' => 'اقرأ المزيد',
                'is_active' => true,
                'sort_order' => 6
            ],
            [
                'key' => 'home.about.image',
                'page' => 'home',
                'section' => 'about',
                'type' => 'image',
                'content_en' => 'About Tharawat Investment Group',
                'content_ar' => 'عن مجموعة ثروات الاستثمارية',
                'image' => 'website_content/about-image.jpg',
                'is_active' => true,
                'sort_order' => 7
            ],

            // Join Us section
            [
                'key' => 'home.join.title1',
                'page' => 'home',
                'section' => 'join',
                'type' => 'text',
                'content_en' => 'Join Our Team',
                'content_ar' => 'انضم إلى فريقنا',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'home.join.button1',
                'page' => 'home',
                'section' => 'join',
                'type' => 'text',
                'content_en' => 'Join Us',
                'content_ar' => 'انضم إلينا',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'home.join.title2',
                'page' => 'home',
                'section' => 'join',
                'type' => 'text',
                'content_en' => 'Contact Us',
                'content_ar' => 'اتصل بنا',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'home.join.button2',
                'page' => 'home',
                'section' => 'join',
                'type' => 'text',
                'content_en' => 'Get In Touch',
                'content_ar' => 'تواصل معنا',
                'is_active' => true,
                'sort_order' => 4
            ],

            // Footer content
            [
                'key' => 'footer.copyright',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => '© 2024 Tharawat Investment Group. All rights reserved.',
                'content_ar' => '© 2024 مجموعة ثروات الاستثمارية. جميع الحقوق محفوظة.',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'footer.description',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => 'Building the future through strategic investments and innovative solutions.',
                'content_ar' => 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة.',
                'is_active' => true,
                'sort_order' => 2
            ]
        ];

        foreach ($contentData as $data) {
            WebsiteContent::create($data);
        }

        // Create sample sections
        Section::create([
            'name' => 'home_about',
            'page' => 'home',
            'type' => 'content',
            'title_en' => 'About Tharawat Investment Group',
            'title_ar' => 'عن مجموعة ثروات الاستثمارية',
            'content_en' => 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.',
            'content_ar' => 'نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.',
            'button_text_en' => 'Learn More',
            'button_text_ar' => 'اعرف المزيد',
            'button_link' => '/about-us',
            'is_active' => true,
            'sort_order' => 1
        ]);

        Section::create([
            'name' => 'home_services',
            'page' => 'home',
            'type' => 'content',
            'title_en' => 'Our Services',
            'title_ar' => 'خدماتنا',
            'content_en' => 'We offer a comprehensive range of investment and financial services to meet your needs.',
            'content_ar' => 'نقدم مجموعة شاملة من الخدمات الاستثمارية والمالية لتلبية احتياجاتك.',
            'is_active' => true,
            'sort_order' => 2
        ]);
    }
}