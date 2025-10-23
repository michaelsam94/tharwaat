<?php

require_once 'vendor/autoload.php';

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;

echo "Updating Tharawat to Thrawaat in database...\n";

try {
    // Update website_contents table
    $result1 = DB::update("UPDATE website_contents SET content_en = REPLACE(content_en, 'Tharawat', 'Thrawaat') WHERE content_en LIKE '%Tharawat%'");
    echo "✅ Updated {$result1} records in website_contents table\n";
    
    // Update sliders table
    $result2 = DB::update("UPDATE sliders SET title_en = REPLACE(title_en, 'Tharawat', 'Thrawaat') WHERE title_en LIKE '%Tharawat%'");
    echo "✅ Updated {$result2} records in sliders table\n";
    
    // Update sections table
    $result3 = DB::update("UPDATE sections SET title_en = REPLACE(title_en, 'Tharawat', 'Thrawaat') WHERE title_en LIKE '%Tharawat%'");
    echo "✅ Updated {$result3} records in sections table\n";
    
    // Update admins table email
    $result4 = DB::update("UPDATE admins SET email = REPLACE(email, 'tharawat', 'thrawaat') WHERE email LIKE '%tharawat%'");
    echo "✅ Updated {$result4} records in admins table\n";
    
    echo "\n🎉 All database updates completed successfully!\n";
    echo "Total records updated: " . ($result1 + $result2 + $result3 + $result4) . "\n";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
