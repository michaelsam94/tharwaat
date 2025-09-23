<?php
/**
 * Migration Runner Script for Shared Hosting
 * 
 * This script can be run via web browser to execute migrations
 * when SSH access is not available.
 * 
 * IMPORTANT: Delete this file after running migrations for security!
 */

// Include Laravel's autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

try {
    echo "<h2>Running Database Migrations...</h2>";
    echo "<pre>";
    
    // Run migrations
    $exitCode = $kernel->call('migrate', [
        '--force' => true
    ]);
    
    if ($exitCode === 0) {
        echo "\n✅ Migrations completed successfully!\n";
        echo "The 'sliders' table has been created.\n";
    } else {
        echo "\n❌ Migration failed with exit code: $exitCode\n";
    }
    
    echo "</pre>";
    
} catch (Exception $e) {
    echo "<h2>Migration Error</h2>";
    echo "<pre>";
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "</pre>";
}

echo "<p><strong>Security Note:</strong> Please delete this file after running migrations!</p>";
?>

