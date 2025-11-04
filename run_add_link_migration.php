<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

try {
    echo "Adding link column to groups table...\n";
    
    // Check if column already exists
    if (Schema::hasColumn('groups', 'link')) {
        echo "Column 'link' already exists in groups table.\n";
    } else {
        // Add the link column
        DB::statement("ALTER TABLE `groups` ADD COLUMN `link` VARCHAR(255) NULL AFTER `title`");
        echo "✓ Successfully added 'link' column to groups table.\n";
    }
    
    // Mark migration as run
    $maxBatch = DB::table('migrations')->max('batch') ?? 0;
    $newBatch = $maxBatch + 1;
    
    $exists = DB::table('migrations')
        ->where('migration', '2025_01_15_000000_add_link_to_groups_table')
        ->exists();
    
    if (!$exists) {
        DB::table('migrations')->insert([
            'migration' => '2025_01_15_000000_add_link_to_groups_table',
            'batch' => $newBatch
        ]);
        echo "✓ Migration marked as run in migrations table.\n";
    } else {
        echo "Migration already marked as run.\n";
    }
    
    echo "\nDone! The link column has been added successfully.\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}

