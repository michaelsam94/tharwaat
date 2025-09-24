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
    '/styles.min.css',
    '/common.min.js', 
    '/libs.min.js',
    '/tharawatlogo.png'
];

foreach ($assetFiles as $asset) {
    if ($uri === $asset) {
        $filePath = __DIR__ . '/public/design/front' . $asset;
        if (file_exists($filePath)) {
            // Set appropriate content type
            $extension = pathinfo($asset, PATHINFO_EXTENSION);
            $contentTypes = [
                'css' => 'text/css',
                'js' => 'application/javascript',
                'png' => 'image/png'
            ];
            
            if (isset($contentTypes[$extension])) {
                header('Content-Type: ' . $contentTypes[$extension]);
            }
            
            readfile($filePath);
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
