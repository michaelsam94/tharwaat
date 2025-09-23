<?php
/**
 * Migration Status Checker
 * 
 * This script shows which migrations have been run and which are pending.
 */

// Include Laravel's autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

try {
    echo "<h2>Migration Status</h2>";
    echo "<pre>";
    
    // Check migration status
    $exitCode = $kernel->call('migrate:status');
    
    echo "</pre>";
    
} catch (Exception $e) {
    echo "<h2>Error</h2>";
    echo "<pre>";
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "</pre>";
}
?>

