<?php
/**
 * PHP 5.6 Compatible Data Seeding Script
 * 
 * This script populates your shared hosting database with all the content
 * from your localhost database. It's compatible with PHP 5.6.
 * 
 * IMPORTANT: Delete this file after running for security!
 */

// Database configuration - Update these with your actual database credentials
$host = 'localhost';
$dbname = 'ahmedawad_741741'; // Your database name from the error
$username = 'your_db_username'; // Update this
$password = 'your_db_password'; // Update this

try {
    // Connect to database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h2>Seeding Database with Website Content...</h2>";
    echo "<pre>";
    
    // Insert sliders data
    $sql = "INSERT IGNORE INTO `sliders` (`title_en`, `title_ar`, `title_bg`, `subtitle_en`, `subtitle_ar`, `subtitle_bg`, `description_en`, `description_ar`, `description_bg`, `button_text_en`, `button_text_ar`, `button_text_bg`, `button_link`, `image`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
    ('Welcome to <span>Tharawat</span><br /><span>Investment Group</span>', 'مرحباً بكم في <span>ثروات</span><br /><span>مجموعة الاستثمار</span>', 'Welcome to <span>Tharawat</span><br /><span>Investment Group</span>', 'Building the future through strategic investments and innovative solutions', 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة', 'Building the future through strategic investments and innovative solutions', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 'نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 'Learn More', 'اعرف المزيد', 'Learn More', '/about-us', 'sliders/welcome-slider.jpg', 1, 1, NOW(), NOW())";
    
    $pdo->exec($sql);
    echo "✅ Sliders data inserted\n";
    
    // Insert sections data
    $sections = [
        ['About Tharawat Investment Group', 'عن مجموعة ثروات الاستثمارية', 'About Tharawat Investment Group', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 'نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 1, 1],
        ['Our Services', 'خدماتنا', 'Our Services', 'We offer a comprehensive range of investment and financial services to meet your needs.', 'نقدم مجموعة شاملة من الخدمات الاستثمارية والمالية لتلبية احتياجاتك.', 'We offer a comprehensive range of investment and financial services to meet your needs.', 1, 2]
    ];
    
    foreach ($sections as $section) {
        $sql = "INSERT IGNORE INTO `sections` (`title_en`, `title_ar`, `title_bg`, `content_en`, `content_ar`, `content_bg`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($section);
    }
    echo "✅ Sections data inserted\n";
    
    // Insert website content data
    $contentData = [
        // Richee page content
        ['pages.richee.header', 'richee', 'text', 'Richee Hospitality Group', 'مجموعة ريشي للضيافة', 'Richee Hospitality Group', 1],
        ['pages.richee.title', 'richee', 'text', 'Hospitality Management', 'إدارة الضيافة', 'Hospitality Management', 1],
        ['pages.richee.p1', 'richee', 'text', 'we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.', 'حصلنا على اتفاقية تطوير NEDA مع Wyndham -واحدة من أكبر الشركات في العالم- لمصر والمغرب.', 'we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.', 1],
        ['pages.richee.p2', 'richee', 'text', 'Our goal is to manage and operate 150 properties in Africa in the short-medium term', 'هدفنا هو إدارة وتشغيل 150 عقار في أفريقيا على المدى القصير والمتوسط', 'Our goal is to manage and operate 150 properties in Africa in the short-medium term', 1],
        ['pages.richee.button', 'richee', 'text', 'ABOUT WYNDHAM', 'حول WYNDHAM', 'ABOUT WYNDHAM', 1],
        
        // Atasoy page content
        ['pages.atasoy.header', 'atasoy', 'text', 'ATASOY Real Estate development', 'أتاسوي لتطوير العقارات', 'ATASOY Real Estate development', 1],
        ['pages.atasoy.title1', 'atasoy', 'text', 'Stay Tuned', 'ترقبوا', 'Stay Tuned', 1],
        ['pages.atasoy.p1', 'atasoy', 'text', 'Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.', 'ترقبوا مشاريعنا الجديدة المثيرة! مع أكثر من أربعين عاماً من الخبرة في المقاولات والاستشارات الهندسية عبر مصر والسعودية والكويت، قررت شركة أتاسوي التوسع في تطوير العقارات.', 'Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.', 1],
        ['pages.atasoy.title2', 'atasoy', 'text', 'Le Paradis De Maadi', 'لو باراديس دي المعادي', 'Le Paradis De Maadi', 1],
        ['pages.atasoy.p2', 'atasoy', 'text', 'Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.', 'مشروع مجمعنا التجاري يقع في موقع متميز في المعادي أوتستراد. قيد الإنشاء حالياً، سيتضمن المشروع مطعماً فاخراً ومقهى ومنطقة تجارية وهايبرماركت.', 'Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.', 1],
        ['pages.atasoy.title3', 'atasoy', 'text', 'New Administrative Capital', 'العاصمة الإدارية الجديدة', 'New Administrative Capital', 1],
        ['pages.atasoy.p3', 'atasoy', 'text', 'We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.', 'نحن متحمسون للإعلان عن إطلاق مشروعنا الأول قريباً في منطقة المدينة الإعلامية في العاصمة الإدارية الجديدة، المسمى برج WYNDHAM GRAND.', 'We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.', 1],
        ['pages.atasoy.title4', 'atasoy', 'text', 'North Coast Egypt', 'الساحل الشمالي مصر', 'North Coast Egypt', 1],
        ['pages.atasoy.p4', 'atasoy', 'text', 'Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.', 'ترقبوا سنطلق مشروعنا الضخم الأول في الساحل الشمالي مصر قريباً برؤية جديدة لم يتم تطبيقها بعد في سوق العقارات المصري.', 'Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.', 1],
        
        // Financial page content
        ['pages.financial.header', 'financial', 'text', 'Financial Investment', 'الاستثمار المالي', 'Financial Investment', 1],
        ['pages.financial.title1', 'financial', 'text', 'Custody Services', 'خدمات الحفظ', 'Custody Services', 1],
        ['pages.financial.p1', 'financial', 'text', 'Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.', 'تقدم شركتنا خدمات الحفظ لمساعدة عملائنا على الشعور بالثقة في قدرتهم على إدارة استثماراتهم.', 'Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.', 1],
        ['pages.financial.title2', 'financial', 'text', 'Consultancy Services', 'خدمات الاستشارات', 'Consultancy Services', 1],
        ['pages.financial.p2', 'financial', 'text', 'Our duty is to monitor the country\'s development plans to assist investors in making well-informed decisions.', 'واجبنا هو مراقبة خطط التنمية في البلاد لمساعدة المستثمرين على اتخاذ قرارات مدروسة.', 'Our duty is to monitor the country\'s development plans to assist investors in making well-informed decisions.', 1],
        ['pages.financial.title3', 'financial', 'text', 'Fund & Portfolio Management', 'إدارة الصناديق والمحافظ', 'Fund & Portfolio Management', 1],
        ['pages.financial.p3', 'financial', 'text', 'we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.', 'لدينا فريق من الباحثين ذوي الخبرة والتكنولوجيا المتقدمة مخصص لإدارة محافظ الأفراد ذوي الثروات العالية والمؤسسات المالية.', 'we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.', 1],
        
        // Energy page content
        ['pages.energy.header', 'energy', 'text', 'Thrawaat Renewable Energy', 'ثروات للطاقة المتجددة', 'Thrawaat Renewable Energy', 1],
        ['pages.energy.title1', 'energy', 'text', 'Our company has formed a partnership with Univergy Solar', 'شكلت شركتنا شراكة مع Univergy Solar', 'Our company has formed a partnership with Univergy Solar', 1],
        ['pages.energy.p1', 'energy', 'text', 'A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.', 'مجموعة أعمال رائدة في قطاع الطاقة المتجددة. نركز على تطوير وبناء محطات كبيرة للطاقة الشمسية وطاقة الرياح.', 'A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.', 1],
        ['pages.energy.cta', 'energy', 'text', 'Website', 'الموقع', 'Website', 1],
        
        // Mining page content
        ['pages.mining.header', 'mining', 'text', 'Mining & petroleum services', 'خدمات التعدين والبترول', 'Mining & petroleum services', 1],
        ['pages.mining.p1', 'mining', 'text', 'Under Construction', 'قيد الإنشاء', 'Under Construction', 1],
        
        // Tourism page content
        ['pages.tourism.header', 'tourism', 'text', 'Tourism & Travel', 'السياحة والسفر', 'Tourism & Travel', 1],
        ['pages.tourism.title', 'tourism', 'text', 'Mon ami travel', 'مون آمي ترافل', 'Mon ami travel', 1],
        ['pages.tourism.p1', 'tourism', 'text', 'We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.', 'لسنا مؤسسة سياحية جديدة، ولا نحن هنا لتقييم أنشطتنا السياحية. مؤسستنا موجودة منذ فترة.', 'We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.', 1],
        ['pages.tourism.cta', 'tourism', 'text', 'WEBSITE', 'الموقع', 'WEBSITE', 1],
        
        // Auto page content
        ['pages.auto.header', 'auto', 'text', 'Automotive', 'السيارات', 'Automotive', 1],
        ['pages.auto.title1', 'auto', 'text', 'Al Awad Automotive Group', 'مجموعة العواد للسيارات', 'Al Awad Automotive Group', 1],
        ['pages.auto.p1', 'auto', 'text', 'established 2004 with 3S facilities "Showrooms, Services stations & Spare parts" dealing with large automotive companies such as General Motors & Nissan Motors', 'تأسست عام 2004 مع مرافق 3S "صالات عرض ومحطات خدمة وقطع غيار" تتعامل مع شركات السيارات الكبيرة مثل جنرال موتورز و نيسان موتورز', 'established 2004 with 3S facilities "Showrooms, Services stations & Spare parts" dealing with large automotive companies such as General Motors & Nissan Motors', 1],
        ['pages.auto.title2', 'auto', 'text', 'OCTOPUS AUTO', 'أوكتوبوس أوتو', 'OCTOPUS AUTO', 1],
        ['pages.auto.p2', 'auto', 'text', 'The Octopus Company acts as the representative for Sinotruk trucks in Egypt.', 'تعمل شركة أوكتوبوس كممثل لشاحنات سينوتراك في مصر.', 'The Octopus Company acts as the representative for Sinotruk trucks in Egypt.', 1],
        ['pages.auto.cta', 'auto', 'text', 'WEBSITE', 'الموقع', 'WEBSITE', 1],
        
        // Retail page content
        ['pages.retail.header', 'retail', 'text', 'Retail & Hypermarkets', 'التجزئة والهايبرماركت', 'Retail & Hypermarkets', 1],
        ['pages.retail.title', 'retail', 'text', 'Under Construction', 'قيد الإنشاء', 'Under Construction', 1],
        
        // Tech page content
        ['pages.tech.header', 'tech', 'text', 'Telphoenix Business Solutions', 'تلفونيكس حلول الأعمال', 'Telphoenix Business Solutions', 1],
        ['pages.tech.title1', 'tech', 'text', 'Information Technology', 'تكنولوجيا المعلومات', 'Information Technology', 1],
        ['pages.tech.p1', 'tech', 'text', 'We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.', 'نصمم ونبني وندير أنظمة تكنولوجيا معلومات آمنة وقابلة للتوسع مصممة خصيصاً لنمو أعمالك.', 'We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.', 1],
        ['pages.tech.title2', 'tech', 'text', 'E‑Commerce Solutions', 'حلول التجارة الإلكترونية', 'E‑Commerce Solutions', 1],
        ['pages.tech.p2', 'tech', 'text', 'We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.', 'نطلق تجارب تجارية تركز على الإيرادات - من واجهات المتاجر إلى اللوجستيات والمدفوعات - حتى تبيع أكثر بأقل احتكاك.', 'We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.', 1],
        ['pages.tech.title3', 'tech', 'text', 'Advertising & Creative', 'الإعلان والإبداع', 'Advertising & Creative', 1],
        ['pages.tech.p3', 'tech', 'text', 'Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.', 'حملات كاملة القمع تربط العلامة التجارية بالأداء. نحن نصنع خطط إبداعية ومحتوى وإعلامية تنمي الوعي وخط الأنابيب.', 'Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.', 1],
        
        // Contact page content
        ['pages.contact.title', 'contact', 'text', 'Contact us', 'اتصل بنا', 'Contact us', 1],
        ['pages.contact.form.title', 'contact', 'text', 'Send Message', 'إرسال رسالة', 'Send Message', 1],
        ['pages.contact.form.req', 'contact', 'text', '* The following info is required *', '* المعلومات التالية مطلوبة *', '* The following info is required *', 1],
        ['pages.contact.form.firstName', 'contact', 'text', 'First Name *', 'الاسم الأول *', 'First Name *', 1],
        ['pages.contact.form.lastName', 'contact', 'text', 'Last Name *', 'الاسم الأخير *', 'Last Name *', 1],
        ['pages.contact.form.email', 'contact', 'text', 'Email *', 'البريد الإلكتروني *', 'Email *', 1],
        ['pages.contact.form.phone', 'contact', 'text', 'Phone', 'الهاتف', 'Phone', 1],
        ['pages.contact.form.message', 'contact', 'text', 'Message', 'الرسالة', 'Message', 1],
        ['pages.contact.form.cta', 'contact', 'text', 'Send Message', 'إرسال الرسالة', 'Send Message', 1],
        
        // Join page content
        ['pages.join.title', 'join', 'text', 'Join our team', 'انضم إلى فريقنا', 'Join our team', 1],
        ['pages.join.form.title', 'join', 'text', 'Upload your Resume', 'ارفع سيرتك الذاتية', 'Upload your Resume', 1],
        ['pages.join.form.req', 'join', 'text', '* The following info is required *', '* المعلومات التالية مطلوبة *', '* The following info is required *', 1],
        ['pages.join.form.firstName', 'join', 'text', 'First Name *', 'الاسم الأول *', 'First Name *', 1],
        ['pages.join.form.lastName', 'join', 'text', 'Last Name *', 'الاسم الأخير *', 'Last Name *', 1],
        ['pages.join.form.email', 'join', 'text', 'Email *', 'البريد الإلكتروني *', 'Email *', 1],
        ['pages.join.form.phone', 'join', 'text', 'Phone', 'الهاتف', 'Phone', 1],
        ['pages.join.form.jobTitle', 'join', 'text', 'Job Title', 'المسمى الوظيفي', 'Job Title', 1],
        ['pages.join.form.cta', 'join', 'text', 'Send', 'إرسال', 'Send', 1],
        
        // Home page content
        ['home.about.header', 'home', 'text', 'About Tharawat', 'عن ثروات', 'About Tharawat', 1],
        ['home.about.title', 'home', 'text', 'Your Trusted Investment Partner', 'شريكك الاستثماري الموثوق', 'Your Trusted Investment Partner', 1],
        ['home.about.text1', 'home', 'text', 'Professional and versatile technical and engineering capability.', 'قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات.', 'Professional and versatile technical and engineering capability.', 1],
        ['home.about.text2', 'home', 'text', 'Diversified range of Products & Services.', 'مجموعة متنوعة من المنتجات والخدمات.', 'Diversified range of Products & Services.', 1],
        ['home.about.text3', 'home', 'text', 'Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.', 'التركيز على أسماء العلامات التجارية عالية الجودة والابتكار الراسخ ورضا العملاء.', 'Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.', 1],
        ['home.about.button', 'home', 'text', 'Read More', 'اقرأ المزيد', 'Read More', 1],
        ['home.about.image', 'home', 'image', 'About Tharawat Investment Group', 'عن مجموعة ثروات الاستثمارية', 'About Tharawat Investment Group', 1],
        
        // Join Us section
        ['home.join.title1', 'home', 'text', 'Join Our Team', 'انضم إلى فريقنا', 'Join Our Team', 1],
        ['home.join.button1', 'home', 'text', 'Join Us', 'انضم إلينا', 'Join Us', 1],
        ['home.join.title2', 'home', 'text', 'Contact Us', 'اتصل بنا', 'Contact Us', 1],
        ['home.join.button2', 'home', 'text', 'Get In Touch', 'تواصل معنا', 'Get In Touch', 1],
        
        // Footer content
        ['footer.copyright', 'footer', 'text', '© 2024 Tharawat Investment Group. All rights reserved.', '© 2024 مجموعة ثروات الاستثمارية. جميع الحقوق محفوظة.', '© 2024 Tharawat Investment Group. All rights reserved.', 1],
        ['footer.description', 'footer', 'text', 'Building the future through strategic investments and innovative solutions.', 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة.', 'Building the future through strategic investments and innovative solutions.', 1]
    ];
    
    $sql = "INSERT IGNORE INTO `website_contents` (`content_key`, `page`, `content_type`, `content_en`, `content_ar`, `content_bg`, `is_active`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
    $stmt = $pdo->prepare($sql);
    
    foreach ($contentData as $content) {
        $stmt->execute($content);
    }
    echo "✅ Website content data inserted (" . count($contentData) . " records)\n";
    
    // Insert admin user (if needed)
    $sql = "INSERT IGNORE INTO `admins` (`name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('Admin', 'admin@thrawaat.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW())";
    $pdo->exec($sql);
    echo "✅ Admin user created\n";
    
    echo "\n🎉 All data seeded successfully!\n";
    echo "Your website now has all the content from localhost.\n";
    echo "Total records inserted:\n";
    echo "- 1 Slider\n";
    echo "- 2 Sections\n";
    echo "- " . count($contentData) . " Website Content entries\n";
    echo "- 1 Admin user\n";
    echo "</pre>";
    
} catch (PDOException $e) {
    echo "<h2>Database Error</h2>";
    echo "<pre>";
    echo "Error: " . $e->getMessage() . "\n";
    echo "</pre>";
    echo "<p><strong>Note:</strong> Please update the database credentials in this script before running it.</p>";
}

echo "<p><strong>Security Note:</strong> Please delete this file after running for security!</p>";
?>
