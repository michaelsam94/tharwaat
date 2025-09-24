<?php
echo "<h1>Image Path Test</h1>";

$testImages = [
    'financial3.jpg',
    'financial.jpeg', 
    'financial2.jpg',
    'tharawatlogo.png'
];

$possiblePaths = [
    '/public/storage/website_images/',
    '/public/storage/',
    '/public/manage/img/groups_content/',
    '/public/design/front/img/',
    '/public/'
];

foreach ($testImages as $image) {
    echo "<h2>Testing: $image</h2>";
    $found = false;
    
    foreach ($possiblePaths as $path) {
        $fullPath = __DIR__ . $path . $image;
        if (file_exists($fullPath)) {
            echo "<p style='color: green;'>✓ Found at: $path$image</p>";
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        echo "<p style='color: red;'>✗ Not found in any location</p>";
    }
    
    // Test URL
    $url = 'https://thrawaat.com/' . $image;
    echo "<p><a href='$url' target='_blank'>Test URL: $url</a></p>";
    echo "<hr>";
}
?>
