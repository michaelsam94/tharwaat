<?php
echo "<h1>Asset Test</h1>";
echo "<p>Testing if assets are accessible:</p>";

// Test common asset paths
$assetPaths = [
    '/css/app.css',
    '/js/app.js',
    '/favicon.ico',
    '/robots.txt'
];

foreach($assetPaths as $path) {
    $fullPath = __DIR__ . '/public' . $path;
    $exists = file_exists($fullPath);
    $url = 'https://thrawaat.com' . $path;
    echo "<p><strong>$path:</strong> " . ($exists ? "EXISTS" : "NOT FOUND") . " - <a href='$url' target='_blank'>Test URL</a></p>";
}

echo "<h2>Directory Structure:</h2>";
echo "<p>Public directory contents:</p>";
$publicFiles = scandir(__DIR__ . '/public');
foreach($publicFiles as $file) {
    if($file != '.' && $file != '..') {
        echo "<p>- $file</p>";
    }
}
?>
