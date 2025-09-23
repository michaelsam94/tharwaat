<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteContent;

class AllPagesContentSeeder extends Seeder
{
    public function run()
    {
        // All pages content from language files
        $allContent = [
            // Richee page content
            ['key' => 'pages.richee.header', 'page' => 'richee', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Richee Hospitality Group', 'content_ar' => 'مجموعة ريشي للضيافة', 'content_bg' => 'Richee Hospitality Group', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.richee.title', 'page' => 'richee', 'section' => 'content', 'type' => 'text', 'content_en' => 'Hospitality Management', 'content_ar' => 'إدارة الضيافة', 'content_bg' => 'Hospitality Management', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.richee.p1', 'page' => 'richee', 'section' => 'content', 'type' => 'text', 'content_en' => "we gain NEDA development agreement with Wyndham -one of the world's largest- for Egypt and Morocco.", 'content_ar' => 'حصلنا على اتفاقية تطوير NEDA مع Wyndham -واحدة من أكبر الشركات في العالم- لمصر والمغرب.', 'content_bg' => 'we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.richee.p2', 'page' => 'richee', 'section' => 'content', 'type' => 'text', 'content_en' => 'Our goal is to manage and operate 150 properties in Africa in the short-medium term', 'content_ar' => 'هدفنا هو إدارة وتشغيل 150 عقار في أفريقيا على المدى القصير والمتوسط', 'content_bg' => 'Our goal is to manage and operate 150 properties in Africa in the short-medium term', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.richee.button', 'page' => 'richee', 'section' => 'content', 'type' => 'text', 'content_en' => 'ABOUT WYNDHAM', 'content_ar' => 'حول WYNDHAM', 'content_bg' => 'ABOUT WYNDHAM', 'is_active' => true, 'sort_order' => 5],

            // Atasoy page content
            ['key' => 'pages.atasoy.header', 'page' => 'atasoy', 'section' => 'hero', 'type' => 'text', 'content_en' => 'ATASOY Real Estate development', 'content_ar' => 'أتاسوي لتطوير العقارات', 'content_bg' => 'ATASOY Real Estate development', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.atasoy.title1', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Stay Tuned', 'content_ar' => 'ترقبوا', 'content_bg' => 'Stay Tuned', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.atasoy.p1', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.', 'content_ar' => 'ترقبوا مشاريعنا الجديدة المثيرة! مع أكثر من أربعين عاماً من الخبرة في المقاولات والاستشارات الهندسية عبر مصر والسعودية والكويت، قررت شركة أتاسوي التوسع في تطوير العقارات.', 'content_bg' => 'Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.atasoy.title2', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Le Paradis De Maadi', 'content_ar' => 'لو باراديس دي المعادي', 'content_bg' => 'Le Paradis De Maadi', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.atasoy.p2', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.', 'content_ar' => 'مشروع مجمعنا التجاري يقع في موقع متميز في المعادي أوتستراد. قيد الإنشاء حالياً، سيتضمن المشروع مطعماً فاخراً ومقهى ومنطقة تجارية وهايبرماركت.', 'content_bg' => 'Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.', 'is_active' => true, 'sort_order' => 5],
            ['key' => 'pages.atasoy.title3', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'New Administrative Capital', 'content_ar' => 'العاصمة الإدارية الجديدة', 'content_bg' => 'New Administrative Capital', 'is_active' => true, 'sort_order' => 6],
            ['key' => 'pages.atasoy.p3', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.', 'content_ar' => 'نحن متحمسون للإعلان عن إطلاق مشروعنا الأول قريباً في منطقة المدينة الإعلامية في العاصمة الإدارية الجديدة، المسمى برج WYNDHAM GRAND.', 'content_bg' => 'We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.', 'is_active' => true, 'sort_order' => 7],
            ['key' => 'pages.atasoy.title4', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'North Coast Egypt', 'content_ar' => 'الساحل الشمالي مصر', 'content_bg' => 'North Coast Egypt', 'is_active' => true, 'sort_order' => 8],
            ['key' => 'pages.atasoy.p4', 'page' => 'atasoy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.', 'content_ar' => 'ترقبوا سنطلق مشروعنا الضخم الأول في الساحل الشمالي مصر قريباً برؤية جديدة لم يتم تطبيقها بعد في سوق العقارات المصري.', 'content_bg' => 'Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.', 'is_active' => true, 'sort_order' => 9],

            // Financial page content
            ['key' => 'pages.financial.header', 'page' => 'financial', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Financial Investment', 'content_ar' => 'الاستثمار المالي', 'content_bg' => 'Financial Investment', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.financial.title1', 'page' => 'financial', 'section' => 'content', 'type' => 'text', 'content_en' => 'Custody Services', 'content_ar' => 'خدمات الحفظ', 'content_bg' => 'Custody Services', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.financial.p1', 'page' => 'financial', 'section' => 'content', 'type' => 'text', 'content_en' => 'Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.', 'content_ar' => 'تقدم شركتنا خدمات الحفظ لمساعدة عملائنا على الشعور بالثقة في قدرتهم على إدارة استثماراتهم.', 'content_bg' => 'Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.financial.title2', 'page' => 'financial', 'section' => 'content', 'type' => 'text', 'content_en' => 'Consultancy Services', 'content_ar' => 'خدمات الاستشارات', 'content_bg' => 'Consultancy Services', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.financial.p2', 'page' => 'financial', 'section' => 'content', 'type' => 'text', 'content_en' => "Our duty is to monitor the country's development plans to assist investors in making well-informed decisions.", 'content_ar' => 'واجبنا هو مراقبة خطط التنمية في البلاد لمساعدة المستثمرين على اتخاذ قرارات مدروسة.', 'content_bg' => "Our duty is to monitor the country's development plans to assist investors in making well-informed decisions.", 'is_active' => true, 'sort_order' => 5],
            ['key' => 'pages.financial.title3', 'page' => 'financial', 'section' => 'content', 'type' => 'text', 'content_en' => 'Fund & Portfolio Management', 'content_ar' => 'إدارة الصناديق والمحافظ', 'content_bg' => 'Fund & Portfolio Management', 'is_active' => true, 'sort_order' => 6],
            ['key' => 'pages.financial.p3', 'page' => 'financial', 'section' => 'content', 'type' => 'text', 'content_en' => 'we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.', 'content_ar' => 'لدينا فريق من الباحثين ذوي الخبرة والتكنولوجيا المتقدمة مخصص لإدارة محافظ الأفراد ذوي الثروات العالية والمؤسسات المالية.', 'content_bg' => 'we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.', 'is_active' => true, 'sort_order' => 7],

            // Energy page content
            ['key' => 'pages.energy.header', 'page' => 'energy', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Thrawaat Renewable Energy', 'content_ar' => 'ثروات للطاقة المتجددة', 'content_bg' => 'Thrawaat Renewable Energy', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.energy.title1', 'page' => 'energy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Our company has formed a partnership with Univergy Solar', 'content_ar' => 'شكلت شركتنا شراكة مع Univergy Solar', 'content_bg' => 'Our company has formed a partnership with Univergy Solar', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.energy.p1', 'page' => 'energy', 'section' => 'content', 'type' => 'text', 'content_en' => 'A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.', 'content_ar' => 'مجموعة أعمال رائدة في قطاع الطاقة المتجددة. نركز على تطوير وبناء محطات كبيرة للطاقة الشمسية وطاقة الرياح.', 'content_bg' => 'A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.energy.cta', 'page' => 'energy', 'section' => 'content', 'type' => 'text', 'content_en' => 'Website', 'content_ar' => 'الموقع', 'content_bg' => 'Website', 'is_active' => true, 'sort_order' => 4],

            // Mining page content
            ['key' => 'pages.mining.header', 'page' => 'mining', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Mining & petroleum services', 'content_ar' => 'خدمات التعدين والبترول', 'content_bg' => 'Mining & petroleum services', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.mining.p1', 'page' => 'mining', 'section' => 'content', 'type' => 'text', 'content_en' => 'Under Construction', 'content_ar' => 'قيد الإنشاء', 'content_bg' => 'Under Construction', 'is_active' => true, 'sort_order' => 2],

            // Tourism page content
            ['key' => 'pages.tourism.header', 'page' => 'tourism', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Tourism & Travel', 'content_ar' => 'السياحة والسفر', 'content_bg' => 'Tourism & Travel', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.tourism.title', 'page' => 'tourism', 'section' => 'content', 'type' => 'text', 'content_en' => 'Mon ami travel', 'content_ar' => 'مون آمي ترافل', 'content_bg' => 'Mon ami travel', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.tourism.p1', 'page' => 'tourism', 'section' => 'content', 'type' => 'text', 'content_en' => 'We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.', 'content_ar' => 'لسنا مؤسسة سياحية جديدة، ولا نحن هنا لتقييم أنشطتنا السياحية. مؤسستنا موجودة منذ فترة.', 'content_bg' => 'We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.tourism.cta', 'page' => 'tourism', 'section' => 'content', 'type' => 'text', 'content_en' => 'WEBSITE', 'content_ar' => 'الموقع', 'content_bg' => 'WEBSITE', 'is_active' => true, 'sort_order' => 4],

            // Auto page content
            ['key' => 'pages.auto.header', 'page' => 'auto', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Automotive', 'content_ar' => 'السيارات', 'content_bg' => 'Automotive', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.auto.title1', 'page' => 'auto', 'section' => 'content', 'type' => 'text', 'content_en' => 'Al Awad Automotive Group', 'content_ar' => 'مجموعة العواد للسيارات', 'content_bg' => 'Al Awad Automotive Group', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.auto.p1', 'page' => 'auto', 'section' => 'content', 'type' => 'text', 'content_en' => 'established 2004 with 3S facilities "Showrooms, Services stations & Spare parts" dealing with large automotive companies such as General Motors & Nissan Motors', 'content_ar' => 'تأسست عام 2004 مع مرافق 3S "صالات عرض ومحطات خدمة وقطع غيار" تتعامل مع شركات السيارات الكبيرة مثل جنرال موتورز و نيسان موتورز', 'content_bg' => 'established 2004 with 3S facilities "Showrooms, Services stations & Spare parts" dealing with large automotive companies such as General Motors & Nissan Motors', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.auto.title2', 'page' => 'auto', 'section' => 'content', 'type' => 'text', 'content_en' => 'OCTOPUS AUTO', 'content_ar' => 'أوكتوبوس أوتو', 'content_bg' => 'OCTOPUS AUTO', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.auto.p2', 'page' => 'auto', 'section' => 'content', 'type' => 'text', 'content_en' => 'The Octopus Company acts as the representative for Sinotruk trucks in Egypt.', 'content_ar' => 'تعمل شركة أوكتوبوس كممثل لشاحنات سينوتراك في مصر.', 'content_bg' => 'The Octopus Company acts as the representative for Sinotruk trucks in Egypt.', 'is_active' => true, 'sort_order' => 5],
            ['key' => 'pages.auto.cta', 'page' => 'auto', 'section' => 'content', 'type' => 'text', 'content_en' => 'WEBSITE', 'content_ar' => 'الموقع', 'content_bg' => 'WEBSITE', 'is_active' => true, 'sort_order' => 6],

            // Retail page content
            ['key' => 'pages.retail.header', 'page' => 'retail', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Retail & Hypermarkets', 'content_ar' => 'التجزئة والهايبرماركت', 'content_bg' => 'Retail & Hypermarkets', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.retail.title', 'page' => 'retail', 'section' => 'content', 'type' => 'text', 'content_en' => 'Under Construction', 'content_ar' => 'قيد الإنشاء', 'content_bg' => 'Under Construction', 'is_active' => true, 'sort_order' => 2],

            // Tech page content
            ['key' => 'pages.tech.header', 'page' => 'tech', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Telphoenix Business Solutions', 'content_ar' => 'تلفونيكس حلول الأعمال', 'content_bg' => 'Telphoenix Business Solutions', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.tech.title1', 'page' => 'tech', 'section' => 'content', 'type' => 'text', 'content_en' => 'Information Technology', 'content_ar' => 'تكنولوجيا المعلومات', 'content_bg' => 'Information Technology', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.tech.p1', 'page' => 'tech', 'section' => 'content', 'type' => 'text', 'content_en' => 'We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.', 'content_ar' => 'نصمم ونبني وندير أنظمة تكنولوجيا معلومات آمنة وقابلة للتوسع مصممة خصيصاً لنمو أعمالك.', 'content_bg' => 'We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.tech.title2', 'page' => 'tech', 'section' => 'content', 'type' => 'text', 'content_en' => 'E‑Commerce Solutions', 'content_ar' => 'حلول التجارة الإلكترونية', 'content_bg' => 'E‑Commerce Solutions', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.tech.p2', 'page' => 'tech', 'section' => 'content', 'type' => 'text', 'content_en' => 'We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.', 'content_ar' => 'نطلق تجارب تجارية تركز على الإيرادات - من واجهات المتاجر إلى اللوجستيات والمدفوعات - حتى تبيع أكثر بأقل احتكاك.', 'content_bg' => 'We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.', 'is_active' => true, 'sort_order' => 5],
            ['key' => 'pages.tech.title3', 'page' => 'tech', 'section' => 'content', 'type' => 'text', 'content_en' => 'Advertising & Creative', 'content_ar' => 'الإعلان والإبداع', 'content_bg' => 'Advertising & Creative', 'is_active' => true, 'sort_order' => 6],
            ['key' => 'pages.tech.p3', 'page' => 'tech', 'section' => 'content', 'type' => 'text', 'content_en' => 'Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.', 'content_ar' => 'حملات كاملة القمع تربط العلامة التجارية بالأداء. نحن نصنع خطط إبداعية ومحتوى وإعلامية تنمي الوعي وخط الأنابيب.', 'content_bg' => 'Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.', 'is_active' => true, 'sort_order' => 7],

            // Contact page content
            ['key' => 'pages.contact.title', 'page' => 'contact', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Contact us', 'content_ar' => 'اتصل بنا', 'content_bg' => 'Contact us', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.contact.form.title', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'Send Message', 'content_ar' => 'إرسال رسالة', 'content_bg' => 'Send Message', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.contact.form.req', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => '* The following info is required *', 'content_ar' => '* المعلومات التالية مطلوبة *', 'content_bg' => '* The following info is required *', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.contact.form.firstName', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'First Name *', 'content_ar' => 'الاسم الأول *', 'content_bg' => 'First Name *', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.contact.form.lastName', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'Last Name *', 'content_ar' => 'الاسم الأخير *', 'content_bg' => 'Last Name *', 'is_active' => true, 'sort_order' => 5],
            ['key' => 'pages.contact.form.email', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'Email *', 'content_ar' => 'البريد الإلكتروني *', 'content_bg' => 'Email *', 'is_active' => true, 'sort_order' => 6],
            ['key' => 'pages.contact.form.phone', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'Phone', 'content_ar' => 'الهاتف', 'content_bg' => 'Phone', 'is_active' => true, 'sort_order' => 7],
            ['key' => 'pages.contact.form.message', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'Message', 'content_ar' => 'الرسالة', 'content_bg' => 'Message', 'is_active' => true, 'sort_order' => 8],
            ['key' => 'pages.contact.form.cta', 'page' => 'contact', 'section' => 'form', 'type' => 'text', 'content_en' => 'Send Message', 'content_ar' => 'إرسال الرسالة', 'content_bg' => 'Send Message', 'is_active' => true, 'sort_order' => 9],

            // Join page content
            ['key' => 'pages.join.title', 'page' => 'join', 'section' => 'hero', 'type' => 'text', 'content_en' => 'Join our team', 'content_ar' => 'انضم إلى فريقنا', 'content_bg' => 'Join our team', 'is_active' => true, 'sort_order' => 1],
            ['key' => 'pages.join.form.title', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'Upload your Resume', 'content_ar' => 'ارفع سيرتك الذاتية', 'content_bg' => 'Upload your Resume', 'is_active' => true, 'sort_order' => 2],
            ['key' => 'pages.join.form.req', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => '* The following info is required *', 'content_ar' => '* المعلومات التالية مطلوبة *', 'content_bg' => '* The following info is required *', 'is_active' => true, 'sort_order' => 3],
            ['key' => 'pages.join.form.firstName', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'First Name *', 'content_ar' => 'الاسم الأول *', 'content_bg' => 'First Name *', 'is_active' => true, 'sort_order' => 4],
            ['key' => 'pages.join.form.lastName', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'Last Name *', 'content_ar' => 'الاسم الأخير *', 'content_bg' => 'Last Name *', 'is_active' => true, 'sort_order' => 5],
            ['key' => 'pages.join.form.email', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'Email *', 'content_ar' => 'البريد الإلكتروني *', 'content_bg' => 'Email *', 'is_active' => true, 'sort_order' => 6],
            ['key' => 'pages.join.form.phone', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'Phone', 'content_ar' => 'الهاتف', 'content_bg' => 'Phone', 'is_active' => true, 'sort_order' => 7],
            ['key' => 'pages.join.form.jobTitle', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'Job Title', 'content_ar' => 'المسمى الوظيفي', 'content_bg' => 'Job Title', 'is_active' => true, 'sort_order' => 8],
            ['key' => 'pages.join.form.cta', 'page' => 'join', 'section' => 'form', 'type' => 'text', 'content_en' => 'Send', 'content_ar' => 'إرسال', 'content_bg' => 'Send', 'is_active' => true, 'sort_order' => 9],
        ];

        // Insert all content
        foreach ($allContent as $content) {
            // Check if content already exists
            $existing = WebsiteContent::where('key', $content['key'])->first();
            
            if (!$existing) {
                WebsiteContent::create($content);
                echo "Created: {$content['key']}\n";
            } else {
                echo "Already exists: {$content['key']}\n";
            }
        }

        echo "\nAll pages content seeding completed!\n";
    }
}
