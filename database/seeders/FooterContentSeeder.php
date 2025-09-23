<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteContent;

class FooterContentSeeder extends Seeder
{
    public function run()
    {
        $footerContent = [
            [
                'key' => 'footer.address1',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => 'Egypt Office: 39 Autostrad Rd. Maadi, Cairo, Egypt.',
                'content_ar' => 'مكتب مصر: 39 طريق الأوتوستراد، المعادي، القاهرة، مصر.',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'footer.phone',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => '+20 223589181',
                'content_ar' => '+20 223589181',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'key' => 'footer.address2',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => 'UAE Office: Business Bay, Dubai, UAE',
                'content_ar' => 'مكتب الإمارات: الخليج التجاري، دبي، الإمارات',
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'key' => 'footer.phone2',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => '+971 4 123 4567',
                'content_ar' => '+971 4 123 4567',
                'is_active' => true,
                'sort_order' => 6
            ],
            [
                'key' => 'footer.email',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => 'info@thrawaat.com',
                'content_ar' => 'info@thrawaat.com',
                'is_active' => true,
                'sort_order' => 7
            ],
            [
                'key' => 'footer.join',
                'page' => 'footer',
                'section' => 'main',
                'type' => 'text',
                'content_en' => 'Join Us',
                'content_ar' => 'انضم إلينا',
                'is_active' => true,
                'sort_order' => 8
            ]
        ];

        foreach ($footerContent as $content) {
            WebsiteContent::updateOrCreate(
                ['key' => $content['key']],
                $content
            );
        }
    }
}
