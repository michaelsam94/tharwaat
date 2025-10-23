<?php

require_once 'vendor/autoload.php';

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;

echo "Updating Tharawat/Tharawa to Thrawaat in database...\n";

try {
    // Update website_contents table - handle both Tharawat and Tharawa
    $result1a = DB::update("UPDATE website_contents SET content_en = REPLACE(content_en, 'Tharawat', 'Thrawaat') WHERE content_en LIKE '%Tharawat%'");
    $result1b = DB::update("UPDATE website_contents SET content_en = REPLACE(content_en, 'Tharawa', 'Thrawaat') WHERE content_en LIKE '%Tharawa%'");
    echo "✅ Updated " . ($result1a + $result1b) . " records in website_contents table\n";
    
    // Update sliders table - handle both Tharawat and Tharawa
    $result2a = DB::update("UPDATE sliders SET title_en = REPLACE(title_en, 'Tharawat', 'Thrawaat') WHERE title_en LIKE '%Tharawat%'");
    $result2b = DB::update("UPDATE sliders SET title_en = REPLACE(title_en, 'Tharawa', 'Thrawaat') WHERE title_en LIKE '%Tharawa%'");
    echo "✅ Updated " . ($result2a + $result2b) . " records in sliders table\n";
    
    // Update sections table - handle both Tharawat and Tharawa
    $result3a = DB::update("UPDATE sections SET title_en = REPLACE(title_en, 'Tharawat', 'Thrawaat') WHERE title_en LIKE '%Tharawat%'");
    $result3b = DB::update("UPDATE sections SET title_en = REPLACE(title_en, 'Tharawa', 'Thrawaat') WHERE title_en LIKE '%Tharawa%'");
    echo "✅ Updated " . ($result3a + $result3b) . " records in sections table\n";
    
    // Update admins table email - handle both tharawat and tharawa
    $result4a = DB::update("UPDATE admins SET email = REPLACE(email, 'tharawat', 'thrawaat') WHERE email LIKE '%tharawat%'");
    $result4b = DB::update("UPDATE admins SET email = REPLACE(email, 'tharawa', 'thrawaat') WHERE email LIKE '%tharawa%'");
    echo "✅ Updated " . ($result4a + $result4b) . " records in admins table\n";
    
    echo "\n🎉 All database updates completed successfully!\n";
    echo "Total records updated: " . ($result1a + $result1b + $result2a + $result2b + $result3a + $result3b + $result4a + $result4b) . "\n";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
