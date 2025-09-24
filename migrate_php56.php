<?php
/**
 * PHP 5.6 Compatible Migration Script
 * 
 * This script creates the missing database tables without requiring Laravel's artisan command.
 * It's compatible with PHP 5.6 and can be run directly via web browser.
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
    
    echo "<h2>Creating Missing Database Tables...</h2>";
    echo "<pre>";
    
    // Create sliders table
    $sql = "CREATE TABLE IF NOT EXISTS `sliders` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `title_en` varchar(255) DEFAULT NULL,
        `title_ar` varchar(255) DEFAULT NULL,
        `title_bg` varchar(255) DEFAULT NULL,
        `subtitle_en` text DEFAULT NULL,
        `subtitle_ar` text DEFAULT NULL,
        `subtitle_bg` text DEFAULT NULL,
        `description_en` text DEFAULT NULL,
        `description_ar` text DEFAULT NULL,
        `description_bg` text DEFAULT NULL,
        `button_text_en` varchar(255) DEFAULT NULL,
        `button_text_ar` varchar(255) DEFAULT NULL,
        `button_text_bg` varchar(255) DEFAULT NULL,
        `button_link` varchar(255) DEFAULT NULL,
        `image` varchar(255) DEFAULT NULL,
        `mobile_image` varchar(255) DEFAULT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `sort_order` int(11) NOT NULL DEFAULT 0,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    echo "✅ Sliders table created successfully\n";
    
    // Create sections table
    $sql = "CREATE TABLE IF NOT EXISTS `sections` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `title_en` varchar(255) DEFAULT NULL,
        `title_ar` varchar(255) DEFAULT NULL,
        `title_bg` varchar(255) DEFAULT NULL,
        `content_en` text DEFAULT NULL,
        `content_ar` text DEFAULT NULL,
        `content_bg` text DEFAULT NULL,
        `image` varchar(255) DEFAULT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `sort_order` int(11) NOT NULL DEFAULT 0,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    echo "✅ Sections table created successfully\n";
    
    // Create pages table
    $sql = "CREATE TABLE IF NOT EXISTS `pages` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `title` varchar(255) NOT NULL,
        `slug` varchar(255) NOT NULL,
        `content_en` longtext DEFAULT NULL,
        `content_ar` longtext DEFAULT NULL,
        `content_bg` longtext DEFAULT NULL,
        `meta_title_en` varchar(255) DEFAULT NULL,
        `meta_title_ar` varchar(255) DEFAULT NULL,
        `meta_title_bg` varchar(255) DEFAULT NULL,
        `meta_description_en` text DEFAULT NULL,
        `meta_description_ar` text DEFAULT NULL,
        `meta_description_bg` text DEFAULT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `pages_slug_unique` (`slug`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    echo "✅ Pages table created successfully\n";
    
    // Create content_blocks table
    $sql = "CREATE TABLE IF NOT EXISTS `content_blocks` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `page_id` bigint(20) unsigned DEFAULT NULL,
        `title` varchar(255) NOT NULL,
        `content_en` longtext DEFAULT NULL,
        `content_ar` longtext DEFAULT NULL,
        `content_bg` longtext DEFAULT NULL,
        `type` enum('text','html','image','video') NOT NULL DEFAULT 'text',
        `sort_order` int(11) NOT NULL DEFAULT 0,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `content_blocks_page_id_foreign` (`page_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    echo "✅ Content blocks table created successfully\n";
    
    // Create media table
    $sql = "CREATE TABLE IF NOT EXISTS `media` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `filename` varchar(255) NOT NULL,
        `original_name` varchar(255) NOT NULL,
        `mime_type` varchar(255) NOT NULL,
        `size` bigint(20) unsigned NOT NULL,
        `path` varchar(255) NOT NULL,
        `alt_text_en` varchar(255) DEFAULT NULL,
        `alt_text_ar` varchar(255) DEFAULT NULL,
        `alt_text_bg` varchar(255) DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    echo "✅ Media table created successfully\n";
    
    // Create website_contents table
    $sql = "CREATE TABLE IF NOT EXISTS `website_contents` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `content_key` varchar(255) NOT NULL,
        `page` varchar(255) NOT NULL,
        `content_type` enum('text','html','image','link') NOT NULL DEFAULT 'text',
        `content_en` longtext DEFAULT NULL,
        `content_ar` longtext DEFAULT NULL,
        `content_bg` longtext DEFAULT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `website_contents_content_key_unique` (`content_key`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    echo "✅ Website contents table created successfully\n";
    
    // Insert sample slider data
    $sql = "INSERT IGNORE INTO `sliders` (`title_en`, `title_ar`, `title_bg`, `subtitle_en`, `subtitle_ar`, `subtitle_bg`, `description_en`, `description_ar`, `description_bg`, `button_text_en`, `button_text_ar`, `button_text_bg`, `button_link`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
    ('Welcome to Thrawaat', 'مرحباً بك في ثروات', 'Добре дошли в Thrawaat', 'Your trusted partner in business', 'شريكك الموثوق في الأعمال', 'Вашият надежден партньор в бизнеса', 'We provide comprehensive business solutions', 'نوفر حلول أعمال شاملة', 'Предлагаме цялостни бизнес решения', 'Learn More', 'اعرف المزيد', 'Научете повече', '#', 1, 1, NOW(), NOW())";
    
    $pdo->exec($sql);
    echo "✅ Sample slider data inserted\n";
    
    echo "\n🎉 All tables created successfully!\n";
    echo "Your Laravel application should now work without the database error.\n";
    echo "</pre>";
    
} catch (PDOException $e) {
    echo "<h2>Database Error</h2>";
    echo "<pre>";
    echo "Error: " . $e->getMessage() . "\n";
    echo "</pre>";
    echo "<p><strong>Note:</strong> Please update the database credentials in this script before running it.</p>";
}

echo "<p><strong>Security Note:</strong> Please delete this file after running migrations!</p>";
?>


