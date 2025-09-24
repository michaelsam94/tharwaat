-- Complete database export for Thrawaat website
-- This SQL file contains all the data from your localhost database
-- Run this on your shared hosting database to populate it with the same data

-- Insert sliders data
INSERT INTO `sliders` (`id`, `title_en`, `title_ar`, `title_bg`, `subtitle_en`, `subtitle_ar`, `subtitle_bg`, `description_en`, `description_ar`, `description_bg`, `button_text_en`, `button_text_ar`, `button_text_bg`, `button_link`, `image`, `mobile_image`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to <span>Tharawat</span><br /><span>Investment Group</span>', 'مرحباً بكم في <span>ثروات</span><br /><span>مجموعة الاستثمار</span>', 'Welcome to <span>Tharawat</span><br /><span>Investment Group</span>', 'Building the future through strategic investments and innovative solutions', 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة', 'Building the future through strategic investments and innovative solutions', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 'نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 'Learn More', 'اعرف المزيد', 'Learn More', '/about-us', 'sliders/welcome-slider.jpg', NULL, 1, 1, NOW(), NOW());

-- Insert sections data
INSERT INTO `sections` (`id`, `title_en`, `title_ar`, `title_bg`, `content_en`, `content_ar`, `content_bg`, `image`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'About Tharawat Investment Group', 'عن مجموعة ثروات الاستثمارية', 'About Tharawat Investment Group', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', 'نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.', 'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.', NULL, 1, 1, NOW(), NOW()),
(2, 'Our Services', 'خدماتنا', 'Our Services', 'We offer a comprehensive range of investment and financial services to meet your needs.', 'نقدم مجموعة شاملة من الخدمات الاستثمارية والمالية لتلبية احتياجاتك.', 'We offer a comprehensive range of investment and financial services to meet your needs.', NULL, 1, 2, NOW(), NOW());

-- Insert website content data (all pages content)
INSERT INTO `website_contents` (`id`, `content_key`, `page`, `content_type`, `content_en`, `content_ar`, `content_bg`, `is_active`, `created_at`, `updated_at`) VALUES
-- Richee page content
(1, 'pages.richee.header', 'richee', 'text', 'Richee Hospitality Group', 'مجموعة ريشي للضيافة', 'Richee Hospitality Group', 1, NOW(), NOW()),
(2, 'pages.richee.title', 'richee', 'text', 'Hospitality Management', 'إدارة الضيافة', 'Hospitality Management', 1, NOW(), NOW()),
(3, 'pages.richee.p1', 'richee', 'text', 'we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.', 'حصلنا على اتفاقية تطوير NEDA مع Wyndham -واحدة من أكبر الشركات في العالم- لمصر والمغرب.', 'we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.', 1, NOW(), NOW()),
(4, 'pages.richee.p2', 'richee', 'text', 'Our goal is to manage and operate 150 properties in Africa in the short-medium term', 'هدفنا هو إدارة وتشغيل 150 عقار في أفريقيا على المدى القصير والمتوسط', 'Our goal is to manage and operate 150 properties in Africa in the short-medium term', 1, NOW(), NOW()),
(5, 'pages.richee.button', 'richee', 'text', 'ABOUT WYNDHAM', 'حول WYNDHAM', 'ABOUT WYNDHAM', 1, NOW(), NOW()),

-- Atasoy page content
(6, 'pages.atasoy.header', 'atasoy', 'text', 'ATASOY Real Estate development', 'أتاسوي لتطوير العقارات', 'ATASOY Real Estate development', 1, NOW(), NOW()),
(7, 'pages.atasoy.title1', 'atasoy', 'text', 'Stay Tuned', 'ترقبوا', 'Stay Tuned', 1, NOW(), NOW()),
(8, 'pages.atasoy.p1', 'atasoy', 'text', 'Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.', 'ترقبوا مشاريعنا الجديدة المثيرة! مع أكثر من أربعين عاماً من الخبرة في المقاولات والاستشارات الهندسية عبر مصر والسعودية والكويت، قررت شركة أتاسوي التوسع في تطوير العقارات.', 'Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.', 1, NOW(), NOW()),
(9, 'pages.atasoy.title2', 'atasoy', 'text', 'Le Paradis De Maadi', 'لو باراديس دي المعادي', 'Le Paradis De Maadi', 1, NOW(), NOW()),
(10, 'pages.atasoy.p2', 'atasoy', 'text', 'Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.', 'مشروع مجمعنا التجاري يقع في موقع متميز في المعادي أوتستراد. قيد الإنشاء حالياً، سيتضمن المشروع مطعماً فاخراً ومقهى ومنطقة تجارية وهايبرماركت.', 'Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.', 1, NOW(), NOW()),
(11, 'pages.atasoy.title3', 'atasoy', 'text', 'New Administrative Capital', 'العاصمة الإدارية الجديدة', 'New Administrative Capital', 1, NOW(), NOW()),
(12, 'pages.atasoy.p3', 'atasoy', 'text', 'We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.', 'نحن متحمسون للإعلان عن إطلاق مشروعنا الأول قريباً في منطقة المدينة الإعلامية في العاصمة الإدارية الجديدة، المسمى برج WYNDHAM GRAND.', 'We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.', 1, NOW(), NOW()),
(13, 'pages.atasoy.title4', 'atasoy', 'text', 'North Coast Egypt', 'الساحل الشمالي مصر', 'North Coast Egypt', 1, NOW(), NOW()),
(14, 'pages.atasoy.p4', 'atasoy', 'text', 'Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.', 'ترقبوا سنطلق مشروعنا الضخم الأول في الساحل الشمالي مصر قريباً برؤية جديدة لم يتم تطبيقها بعد في سوق العقارات المصري.', 'Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.', 1, NOW(), NOW()),

-- Financial page content
(15, 'pages.financial.header', 'financial', 'text', 'Financial Investment', 'الاستثمار المالي', 'Financial Investment', 1, NOW(), NOW()),
(16, 'pages.financial.title1', 'financial', 'text', 'Custody Services', 'خدمات الحفظ', 'Custody Services', 1, NOW(), NOW()),
(17, 'pages.financial.p1', 'financial', 'text', 'Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.', 'تقدم شركتنا خدمات الحفظ لمساعدة عملائنا على الشعور بالثقة في قدرتهم على إدارة استثماراتهم.', 'Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.', 1, NOW(), NOW()),
(18, 'pages.financial.title2', 'financial', 'text', 'Consultancy Services', 'خدمات الاستشارات', 'Consultancy Services', 1, NOW(), NOW()),
(19, 'pages.financial.p2', 'financial', 'text', 'Our duty is to monitor the country\'s development plans to assist investors in making well-informed decisions.', 'واجبنا هو مراقبة خطط التنمية في البلاد لمساعدة المستثمرين على اتخاذ قرارات مدروسة.', 'Our duty is to monitor the country\'s development plans to assist investors in making well-informed decisions.', 1, NOW(), NOW()),
(20, 'pages.financial.title3', 'financial', 'text', 'Fund & Portfolio Management', 'إدارة الصناديق والمحافظ', 'Fund & Portfolio Management', 1, NOW(), NOW()),
(21, 'pages.financial.p3', 'financial', 'text', 'we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.', 'لدينا فريق من الباحثين ذوي الخبرة والتكنولوجيا المتقدمة مخصص لإدارة محافظ الأفراد ذوي الثروات العالية والمؤسسات المالية.', 'we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.', 1, NOW(), NOW()),

-- Energy page content
(22, 'pages.energy.header', 'energy', 'text', 'Thrawaat Renewable Energy', 'ثروات للطاقة المتجددة', 'Thrawaat Renewable Energy', 1, NOW(), NOW()),
(23, 'pages.energy.title1', 'energy', 'text', 'Our company has formed a partnership with Univergy Solar', 'شكلت شركتنا شراكة مع Univergy Solar', 'Our company has formed a partnership with Univergy Solar', 1, NOW(), NOW()),
(24, 'pages.energy.p1', 'energy', 'text', 'A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.', 'مجموعة أعمال رائدة في قطاع الطاقة المتجددة. نركز على تطوير وبناء محطات كبيرة للطاقة الشمسية وطاقة الرياح.', 'A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.', 1, NOW(), NOW()),
(25, 'pages.energy.cta', 'energy', 'text', 'Website', 'الموقع', 'Website', 1, NOW(), NOW()),

-- Mining page content
(26, 'pages.mining.header', 'mining', 'text', 'Mining & petroleum services', 'خدمات التعدين والبترول', 'Mining & petroleum services', 1, NOW(), NOW()),
(27, 'pages.mining.p1', 'mining', 'text', 'Under Construction', 'قيد الإنشاء', 'Under Construction', 1, NOW(), NOW()),

-- Tourism page content
(28, 'pages.tourism.header', 'tourism', 'text', 'Tourism & Travel', 'السياحة والسفر', 'Tourism & Travel', 1, NOW(), NOW()),
(29, 'pages.tourism.title', 'tourism', 'text', 'Mon ami travel', 'مون آمي ترافل', 'Mon ami travel', 1, NOW(), NOW()),
(30, 'pages.tourism.p1', 'tourism', 'text', 'We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.', 'لسنا مؤسسة سياحية جديدة، ولا نحن هنا لتقييم أنشطتنا السياحية. مؤسستنا موجودة منذ فترة.', 'We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.', 1, NOW(), NOW()),
(31, 'pages.tourism.cta', 'tourism', 'text', 'WEBSITE', 'الموقع', 'WEBSITE', 1, NOW(), NOW()),

-- Auto page content
(32, 'pages.auto.header', 'auto', 'text', 'Automotive', 'السيارات', 'Automotive', 1, NOW(), NOW()),
(33, 'pages.auto.title1', 'auto', 'text', 'Al Awad Automotive Group', 'مجموعة العواد للسيارات', 'Al Awad Automotive Group', 1, NOW(), NOW()),
(34, 'pages.auto.p1', 'auto', 'text', 'established 2004 with 3S facilities "Showrooms, Services stations & Spare parts" dealing with large automotive companies such as General Motors & Nissan Motors', 'تأسست عام 2004 مع مرافق 3S "صالات عرض ومحطات خدمة وقطع غيار" تتعامل مع شركات السيارات الكبيرة مثل جنرال موتورز و نيسان موتورز', 'established 2004 with 3S facilities "Showrooms, Services stations & Spare parts" dealing with large automotive companies such as General Motors & Nissan Motors', 1, NOW(), NOW()),
(35, 'pages.auto.title2', 'auto', 'text', 'OCTOPUS AUTO', 'أوكتوبوس أوتو', 'OCTOPUS AUTO', 1, NOW(), NOW()),
(36, 'pages.auto.p2', 'auto', 'text', 'The Octopus Company acts as the representative for Sinotruk trucks in Egypt.', 'تعمل شركة أوكتوبوس كممثل لشاحنات سينوتراك في مصر.', 'The Octopus Company acts as the representative for Sinotruk trucks in Egypt.', 1, NOW(), NOW()),
(37, 'pages.auto.cta', 'auto', 'text', 'WEBSITE', 'الموقع', 'WEBSITE', 1, NOW(), NOW()),

-- Retail page content
(38, 'pages.retail.header', 'retail', 'text', 'Retail & Hypermarkets', 'التجزئة والهايبرماركت', 'Retail & Hypermarkets', 1, NOW(), NOW()),
(39, 'pages.retail.title', 'retail', 'text', 'Under Construction', 'قيد الإنشاء', 'Under Construction', 1, NOW(), NOW()),

-- Tech page content
(40, 'pages.tech.header', 'tech', 'text', 'Telphoenix Business Solutions', 'تلفونيكس حلول الأعمال', 'Telphoenix Business Solutions', 1, NOW(), NOW()),
(41, 'pages.tech.title1', 'tech', 'text', 'Information Technology', 'تكنولوجيا المعلومات', 'Information Technology', 1, NOW(), NOW()),
(42, 'pages.tech.p1', 'tech', 'text', 'We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.', 'نصمم ونبني وندير أنظمة تكنولوجيا معلومات آمنة وقابلة للتوسع مصممة خصيصاً لنمو أعمالك.', 'We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.', 1, NOW(), NOW()),
(43, 'pages.tech.title2', 'tech', 'text', 'E‑Commerce Solutions', 'حلول التجارة الإلكترونية', 'E‑Commerce Solutions', 1, NOW(), NOW()),
(44, 'pages.tech.p2', 'tech', 'text', 'We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.', 'نطلق تجارب تجارية تركز على الإيرادات - من واجهات المتاجر إلى اللوجستيات والمدفوعات - حتى تبيع أكثر بأقل احتكاك.', 'We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.', 1, NOW(), NOW()),
(45, 'pages.tech.title3', 'tech', 'text', 'Advertising & Creative', 'الإعلان والإبداع', 'Advertising & Creative', 1, NOW(), NOW()),
(46, 'pages.tech.p3', 'tech', 'text', 'Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.', 'حملات كاملة القمع تربط العلامة التجارية بالأداء. نحن نصنع خطط إبداعية ومحتوى وإعلامية تنمي الوعي وخط الأنابيب.', 'Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.', 1, NOW(), NOW()),

-- Contact page content
(47, 'pages.contact.title', 'contact', 'text', 'Contact us', 'اتصل بنا', 'Contact us', 1, NOW(), NOW()),
(48, 'pages.contact.form.title', 'contact', 'text', 'Send Message', 'إرسال رسالة', 'Send Message', 1, NOW(), NOW()),
(49, 'pages.contact.form.req', 'contact', 'text', '* The following info is required *', '* المعلومات التالية مطلوبة *', '* The following info is required *', 1, NOW(), NOW()),
(50, 'pages.contact.form.firstName', 'contact', 'text', 'First Name *', 'الاسم الأول *', 'First Name *', 1, NOW(), NOW()),
(51, 'pages.contact.form.lastName', 'contact', 'text', 'Last Name *', 'الاسم الأخير *', 'Last Name *', 1, NOW(), NOW()),
(52, 'pages.contact.form.email', 'contact', 'text', 'Email *', 'البريد الإلكتروني *', 'Email *', 1, NOW(), NOW()),
(53, 'pages.contact.form.phone', 'contact', 'text', 'Phone', 'الهاتف', 'Phone', 1, NOW(), NOW()),
(54, 'pages.contact.form.message', 'contact', 'text', 'Message', 'الرسالة', 'Message', 1, NOW(), NOW()),
(55, 'pages.contact.form.cta', 'contact', 'text', 'Send Message', 'إرسال الرسالة', 'Send Message', 1, NOW(), NOW()),

-- Join page content
(56, 'pages.join.title', 'join', 'text', 'Join our team', 'انضم إلى فريقنا', 'Join our team', 1, NOW(), NOW()),
(57, 'pages.join.form.title', 'join', 'text', 'Upload your Resume', 'ارفع سيرتك الذاتية', 'Upload your Resume', 1, NOW(), NOW()),
(58, 'pages.join.form.req', 'join', 'text', '* The following info is required *', '* المعلومات التالية مطلوبة *', '* The following info is required *', 1, NOW(), NOW()),
(59, 'pages.join.form.firstName', 'join', 'text', 'First Name *', 'الاسم الأول *', 'First Name *', 1, NOW(), NOW()),
(60, 'pages.join.form.lastName', 'join', 'text', 'Last Name *', 'الاسم الأخير *', 'Last Name *', 1, NOW(), NOW()),
(61, 'pages.join.form.email', 'join', 'text', 'Email *', 'البريد الإلكتروني *', 'Email *', 1, NOW(), NOW()),
(62, 'pages.join.form.phone', 'join', 'text', 'Phone', 'الهاتف', 'Phone', 1, NOW(), NOW()),
(63, 'pages.join.form.jobTitle', 'join', 'text', 'Job Title', 'المسمى الوظيفي', 'Job Title', 1, NOW(), NOW()),
(64, 'pages.join.form.cta', 'join', 'text', 'Send', 'إرسال', 'Send', 1, NOW(), NOW()),

-- Home page content
(65, 'home.about.header', 'home', 'text', 'About Tharawat', 'عن ثروات', 'About Tharawat', 1, NOW(), NOW()),
(66, 'home.about.title', 'home', 'text', 'Your Trusted Investment Partner', 'شريكك الاستثماري الموثوق', 'Your Trusted Investment Partner', 1, NOW(), NOW()),
(67, 'home.about.text1', 'home', 'text', 'Professional and versatile technical and engineering capability.', 'قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات.', 'Professional and versatile technical and engineering capability.', 1, NOW(), NOW()),
(68, 'home.about.text2', 'home', 'text', 'Diversified range of Products & Services.', 'مجموعة متنوعة من المنتجات والخدمات.', 'Diversified range of Products & Services.', 1, NOW(), NOW()),
(69, 'home.about.text3', 'home', 'text', 'Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.', 'التركيز على أسماء العلامات التجارية عالية الجودة والابتكار الراسخ ورضا العملاء.', 'Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.', 1, NOW(), NOW()),
(70, 'home.about.button', 'home', 'text', 'Read More', 'اقرأ المزيد', 'Read More', 1, NOW(), NOW()),
(71, 'home.about.image', 'home', 'image', 'About Tharawat Investment Group', 'عن مجموعة ثروات الاستثمارية', 'About Tharawat Investment Group', 1, NOW(), NOW()),

-- Join Us section
(72, 'home.join.title1', 'home', 'text', 'Join Our Team', 'انضم إلى فريقنا', 'Join Our Team', 1, NOW(), NOW()),
(73, 'home.join.button1', 'home', 'text', 'Join Us', 'انضم إلينا', 'Join Us', 1, NOW(), NOW()),
(74, 'home.join.title2', 'home', 'text', 'Contact Us', 'اتصل بنا', 'Contact Us', 1, NOW(), NOW()),
(75, 'home.join.button2', 'home', 'text', 'Get In Touch', 'تواصل معنا', 'Get In Touch', 1, NOW(), NOW()),

-- Footer content
(76, 'footer.copyright', 'footer', 'text', '© 2024 Tharawat Investment Group. All rights reserved.', '© 2024 مجموعة ثروات الاستثمارية. جميع الحقوق محفوظة.', '© 2024 Tharawat Investment Group. All rights reserved.', 1, NOW(), NOW()),
(77, 'footer.description', 'footer', 'text', 'Building the future through strategic investments and innovative solutions.', 'بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة.', 'Building the future through strategic investments and innovative solutions.', 1, NOW(), NOW());

-- Insert admin user (if needed)
INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@thrawaat.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW());

-- Show success message
SELECT 'All data imported successfully! Your website should now have all the content from localhost.' as message;


