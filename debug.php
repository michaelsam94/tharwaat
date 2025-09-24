<?php
echo "<h1>Debug Information</h1>";
echo "<p><strong>Current Time:</strong> " . date('Y-m-d H:i:s') . "</p>";
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
echo "<p><strong>Current Directory:</strong> " . __DIR__ . "</p>";
echo "<p><strong>Document Root:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p><strong>Request URI:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
echo "<p><strong>Script Name:</strong> " . $_SERVER['SCRIPT_NAME'] . "</p>";

echo "<h2>File Existence Check:</h2>";
echo "<p>index.php exists: " . (file_exists(__DIR__ . '/index.php') ? 'YES' : 'NO') . "</p>";
echo "<p>public/ directory exists: " . (file_exists(__DIR__ . '/public') ? 'YES' : 'NO') . "</p>";
echo "<p>public/index.php exists: " . (file_exists(__DIR__ . '/public/index.php') ? 'YES' : 'NO') . "</p>";
echo "<p>vendor/ directory exists: " . (file_exists(__DIR__ . '/vendor') ? 'YES' : 'NO') . "</p>";

echo "<h2>Directory Contents:</h2>";
$files = scandir(__DIR__);
foreach($files as $file) {
    if($file != '.' && $file != '..') {
        echo "<p>" . $file . " - " . (is_dir($file) ? 'DIR' : 'FILE') . "</p>";
    }
}
?>
