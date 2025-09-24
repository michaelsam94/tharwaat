<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

// Check if we're in the correct directory
if (!file_exists(__DIR__ . '/public/index.php')) {
    die('Laravel public directory not found. Please check your deployment.');
}

// Get the request URI
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

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
