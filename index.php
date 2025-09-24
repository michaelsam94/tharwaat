<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Handle specific asset files that are commonly requested
$assetFiles = [
    '/styles.min.css' => '/public/design/front/styles.min.css',
    '/common.min.js' => '/public/design/front/common.min.js',
    '/libs.min.js' => '/public/design/front/libs.min.js',
    '/tharawatlogo.png' => '/public/design/front/img/tharawatlogo.png'
];

foreach ($assetFiles as $asset => $filePath) {
    if ($uri === $asset) {
        $fullPath = __DIR__ . $filePath;
        if (file_exists($fullPath)) {
            // Set appropriate content type
            $extension = pathinfo($asset, PATHINFO_EXTENSION);
            $contentTypes = [
                'css' => 'text/css',
                'js' => 'application/javascript',
                'png' => 'image/png',
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg'
            ];
            
            if (isset($contentTypes[$extension])) {
                header('Content-Type: ' . $contentTypes[$extension]);
            }
            
            readfile($fullPath);
            exit;
        }
    }
}

// Handle all image requests dynamically
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'];
$extension = strtolower(pathinfo($uri, PATHINFO_EXTENSION));

if (in_array($extension, $imageExtensions)) {
    // Try multiple possible locations for images
    $possiblePaths = [
        __DIR__ . '/public/manage/img/groups_content' . $uri,
        __DIR__ . '/public/design/front/img' . $uri,
        __DIR__ . '/public/storage' . $uri,
        __DIR__ . '/public' . $uri
    ];
    
    foreach ($possiblePaths as $imagePath) {
        if (file_exists($imagePath)) {
            // Set appropriate content type
            $contentTypes = [
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif',
                'svg' => 'image/svg+xml',
                'webp' => 'image/webp'
            ];
            
            if (isset($contentTypes[$extension])) {
                header('Content-Type: ' . $contentTypes[$extension]);
            }
            
            readfile($imagePath);
            exit;
        }
    }
}

// Handle storage files
if (strpos($uri, '/storage/') === 0) {
    $filePath = __DIR__ . '/public' . $uri;
    if (file_exists($filePath)) {
        readfile($filePath);
        exit;
    }
}

// Handle static files (CSS, JS, images) from public directory
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Set the correct document root for Laravel
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/public';

// Change to the public directory
chdir(__DIR__ . '/public');

// Set the correct script name
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/public/index.php';

require_once __DIR__.'/public/index.php';
