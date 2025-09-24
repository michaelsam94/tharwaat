<?php
echo "<h1>Image Path Test</h1>";

$testImages = [
    'financial3.jpg' => 'pages_financial_image1.jpg',
    'financial.jpeg' => 'pages_financial_image2.jpg', 
    'financial2.jpg' => 'pages_financial_logo.jpeg',
    'tharawatlogo.png' => 'tharawatlogo.png'
];

$possiblePaths = [
    '/public/storage/website_images/',
    '/public/storage/',
    '/public/manage/img/groups_content/',
    '/public/design/front/img/',
    '/public/'
];

foreach ($testImages as $requestedImage => $actualImage) {
    echo "<h2>Testing: $requestedImage → $actualImage</h2>";
    $found = false;
    
    foreach ($possiblePaths as $path) {
        $fullPath = __DIR__ . $path . $actualImage;
        if (file_exists($fullPath)) {
            echo "<p style='color: green;'>✓ Found at: $path$actualImage</p>";
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        echo "<p style='color: red;'>✗ Not found in any location</p>";
    }
    
    // Test URL
    $url = 'https://thrawaat.com/' . $requestedImage;
    echo "<p><a href='$url' target='_blank'>Test URL: $url</a></p>";
    echo "<hr>";
}
?>
