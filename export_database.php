<?php
/**
 * Database Export Helper Script
 * 
 * This script helps you export your localhost database
 * Run this on your localhost to get the correct mysqldump command
 */

// Get database configuration from .env file
$envFile = __DIR__ . '/.env';
$config = [];

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $config[trim($key)] = trim($value);
        }
    }
}

echo "<h2>Database Export Helper</h2>";
echo "<pre>";

// Display current database configuration
echo "Current Database Configuration:\n";
echo "DB_CONNECTION: " . ($config['DB_CONNECTION'] ?? 'mysql') . "\n";
echo "DB_HOST: " . ($config['DB_HOST'] ?? '127.0.0.1') . "\n";
echo "DB_PORT: " . ($config['DB_PORT'] ?? '3306') . "\n";
echo "DB_DATABASE: " . ($config['DB_DATABASE'] ?? 'Not found') . "\n";
echo "DB_USERNAME: " . ($config['DB_USERNAME'] ?? 'root') . "\n";
echo "\n";

// Generate mysqldump command
$dbName = $config['DB_DATABASE'] ?? 'your_database_name';
$dbUser = $config['DB_USERNAME'] ?? 'root';
$dbHost = $config['DB_HOST'] ?? '127.0.0.1';
$dbPort = $config['DB_PORT'] ?? '3306';

echo "=== EXPORT COMMAND ===\n";
echo "Run this command in your terminal/command prompt:\n\n";

if ($dbHost === '127.0.0.1' || $dbHost === 'localhost') {
    // For local XAMPP/WAMP
    echo "mysqldump -u {$dbUser} -p --routines --triggers --single-transaction --lock-tables=false {$dbName} > thrawaat_export.sql\n\n";
} else {
    // For remote database
    echo "mysqldump -h {$dbHost} -P {$dbPort} -u {$dbUser} -p --routines --triggers --single-transaction --lock-tables=false {$dbName} > thrawaat_export.sql\n\n";
}

echo "=== ALTERNATIVE: Using phpMyAdmin ===\n";
echo "1. Open phpMyAdmin in your browser\n";
echo "2. Select database: {$dbName}\n";
echo "3. Click 'Export' tab\n";
echo "4. Choose 'Custom' method\n";
echo "5. Select: Structure, Data, Routines, Triggers\n";
echo "6. Click 'Go' to download\n\n";

echo "=== NEXT STEPS ===\n";
echo "1. Run the export command above\n";
echo "2. Upload the SQL file to your shared hosting\n";
echo "3. Import via phpMyAdmin on shared hosting\n";
echo "4. Test your website\n\n";

echo "=== IMPORTANT NOTES ===\n";
echo "- Replace 'your_database_name' with actual database name if not found\n";
echo "- You'll be prompted for MySQL password\n";
echo "- The export file will be created in your project directory\n";
echo "- Delete the export file after successful import for security\n";

echo "</pre>";
?>
