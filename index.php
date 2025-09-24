<?php
// Force output to show this is working
header('Content-Type: text/html; charset=utf-8');

// Check if Laravel public directory exists
if (!file_exists(__DIR__ . '/public/index.php')) {
    echo '<h1>Laravel Setup Issue</h1>';
    echo '<p>Laravel public directory not found at: ' . __DIR__ . '/public/index.php</p>';
    echo '<p>Please check your deployment.</p>';
    exit;
}

// Get the request URI
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Handle static files in public directory
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Set up the environment for Laravel
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/public';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/public/index.php';

// Change to the public directory
chdir(__DIR__ . '/public');

// Include the Laravel application
require_once __DIR__.'/public/index.php';
