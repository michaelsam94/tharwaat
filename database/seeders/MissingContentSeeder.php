<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteContent;

class MissingContentSeeder extends Seeder
{
    public function run()
    {
        // Define missing content based on analysis
        $missingContent = [
            // Header navigation content
            [
                'key' => 'header.home',
                'page' => 'header',
                'section' => 'navigation',
                'type' => 'text',
                'content_en' => 'Home',
                'content_ar' => 'الرئيسية',
                'content_bg' => 'Начало',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'header.about',
                'page' => 'header',
                'section' => 'navigation',
                'type' => 'text',
                'content_en' => 'About',
                'content_ar' => 'عن الشركة',
                'content_bg' => 'За нас',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'header.group',
                'page' => 'header',
                'section' => 'navigation',
                'type' => 'text',
                'content_en' => 'The Group',
                'content_ar' => 'المجموعة',
                'content_bg' => 'Групата',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'header.investor',
                'page' => 'header',
                'section' => 'navigation',
                'type' => 'text',
                'content_en' => 'Investor Relations',
                'content_ar' => 'علاقات المستثمرين',
                'content_bg' => 'Инвеститорски отношения',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'key' => 'header.join',
                'page' => 'header',
                'section' => 'navigation',
                'type' => 'text',
                'content_en' => 'Join Us',
                'content_ar' => 'انضم إلينا',
                'content_bg' => 'Присъединете се',
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'key' => 'header.contact',
                'page' => 'header',
                'section' => 'navigation',
                'type' => 'text',
                'content_en' => 'Contact Us',
                'content_ar' => 'اتصل بنا',
                'content_bg' => 'Свържете се с нас',
                'is_active' => true,
                'sort_order' => 6
            ],

            // Home slider content
            [
                'key' => 'home.silderSpan1',
                'page' => 'home',
                'section' => 'slider',
                'type' => 'text',
                'content_en' => 'Welcome to',
                'content_ar' => 'مرحباً بكم في',
                'content_bg' => 'Добре дошли в',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'home.silderSpan2',
                'page' => 'home',
                'section' => 'slider',
                'type' => 'text',
                'content_en' => 'Tharawat Investment Group',
                'content_ar' => 'مجموعة ثروات الاستثمارية',
                'content_bg' => 'Инвестиционна група Тарават',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'home.silderContent',
                'page' => 'home',
                'section' => 'slider',
                'type' => 'text',
                'content_en' => 'Building the future through strategic investments and innovative solutions',
                'content_ar' => 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة',
                'content_bg' => 'Изграждане на бъдещето чрез стратегически инвестиции и иновативни решения',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'home.CTA',
                'page' => 'home',
                'section' => 'slider',
                'type' => 'text',
                'content_en' => 'Learn More',
                'content_ar' => 'اعرف المزيد',
                'content_bg' => 'Научете повече',
                'is_active' => true,
                'sort_order' => 4
            ],

            // About page content
            [
                'key' => 'fullAbout.title',
                'page' => 'about',
                'section' => 'hero',
                'type' => 'text',
                'content_en' => 'Welcome to Thrawaat Int\'l Investment Corp S.A.E',
                'content_ar' => 'مرحباً بكم في شركة ثروات الدولية للاستثمار ش.م.م',
                'content_bg' => 'Добре дошли в Thrawaat International Investment Corp S.A.E',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'fullAbout.header2',
                'page' => 'about',
                'section' => 'content',
                'type' => 'text',
                'content_en' => 'About us',
                'content_ar' => 'عن الشركة',
                'content_bg' => 'За нас',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'fullAbout.title2',
                'page' => 'about',
                'section' => 'content',
                'type' => 'text',
                'content_en' => 'Your Trusted Investment Partner',
                'content_ar' => 'شريكك الاستثماري الموثوق',
                'content_bg' => 'Вашият доверен инвестиционен партньор',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'fullAbout.title3',
                'content_en' => 'Professional and versatile technical and engineering capability.',
                'content_ar' => 'قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات.',
                'content_bg' => 'Професионални и универсални технически и инженерни възможности.',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'fullAbout.p1',
                'page' => 'about',
                'section' => 'content',
                'type' => 'text',
                'content_en' => 'a holding company currently in the process of incorporating. We have been a registered Egyptian Joint Stock Company since 1980, operating under the provisions of companies\' law no. 59 of 1981. Our company has shares in subsidiary companies established in the late 1970s in the Gulf area, specializing in construction and consultation. We have since expanded into the Egyptian markets, offering real estate development and petroleum services.',
                'content_ar' => 'شركة قابضة حالياً في طور التأسيس. لقد كنا شركة مساهمة مصرية مسجلة منذ عام 1980، تعمل تحت أحكام قانون الشركات رقم 59 لسنة 1981. تمتلك شركتنا أسهم في شركات فرعية تأسست في أواخر السبعينيات في منطقة الخليج، متخصصة في البناء والاستشارات. لقد وسعنا منذ ذلك الحين في الأسواق المصرية، ونقدم خدمات تطوير العقارات والبترول.',
                'content_bg' => 'холдингова компания, която в момента е в процес на учредяване. Ние сме регистрирана египетска акционерна компания от 1980 г., работеща под разпоредбите на закона за компаниите № 59 от 1981 г. Нашата компания притежава дялове в дъщерни компании, създадени в края на 70-те години в района на Персийския залив, специализирани в строителство и консултации. Оттогава разширихме в египетските пазари, предлагайки услуги за недвижими имоти и петролни услуги.',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'key' => 'fullAbout.p2',
                'page' => 'about',
                'section' => 'content',
                'type' => 'text',
                'content_en' => 'At Thrawaat Int\'l Investment Corp, we provide professional and versatile technical and engineering capabilities. We offer a diversified range of products and services and focus on quality brand names, solid innovation, and customer satisfaction.',
                'content_ar' => 'في شركة ثروات الدولية للاستثمار، نقدم قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات. نقدم مجموعة متنوعة من المنتجات والخدمات ونتحلى على أسماء العلامات التجارية عالية الجودة والابتكار الراسخ ورضا العملاء.',
                'content_bg' => 'В Thrawaat International Investment Corp ние предоставяме професионални и универсални технически и инженерни възможности. Предлагаме разнообразна гама от продукти и услуги и се фокусираме върху качествени марки, солидна иновация и удовлетвореност на клиентите.',
                'is_active' => true,
                'sort_order' => 5
            ]
        ];

        // Insert missing content
        foreach ($missingContent as $content) {
            // Check if content already exists
            $existing = WebsiteContent::where('key', $content['key'])->first();
            
            if (!$existing) {
                WebsiteContent::create($content);
                echo "Created: {$content['key']}\n";
            } else {
                echo "Already exists: {$content['key']}\n";
            }
        }

        echo "\nMissing content seeding completed!\n";
    }
}
