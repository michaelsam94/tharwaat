<?php
/**
 * Localhost Database Export Script
 * 
 * Run this on your localhost to export all data to SQL files
 * that can be imported on your shared hosting.
 */

// Include Laravel's autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

try {
    echo "<h2>Exporting Localhost Database...</h2>";
    echo "<pre>";
    
    // Export database using mysqldump
    $command = 'mysqldump -u root -p --routines --triggers --single-transaction --lock-tables=false your_database_name > localhost_export.sql';
    
    echo "To export your localhost database, run this command in your terminal:\n";
    echo "mysqldump -u root -p --routines --triggers --single-transaction --lock-tables=false your_database_name > localhost_export.sql\n\n";
    
    echo "Replace 'your_database_name' with your actual database name.\n";
    echo "This will create a file called 'localhost_export.sql' with all your data.\n\n";
    
    echo "Then upload this file to your shared hosting and import it via phpMyAdmin.\n";
    echo "</pre>";
    
} catch (Exception $e) {
    echo "<h2>Error</h2>";
    echo "<pre>";
    echo "Error: " . $e->getMessage() . "\n";
    echo "</pre>";
}
?>



