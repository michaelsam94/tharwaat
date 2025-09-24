<?php
echo "PHP is working!<br>";
echo "Current directory: " . __DIR__ . "<br>";
echo "Public directory exists: " . (file_exists(__DIR__ . '/public') ? 'YES' : 'NO') . "<br>";
echo "Public index.php exists: " . (file_exists(__DIR__ . '/public/index.php') ? 'YES' : 'NO') . "<br>";
echo "Laravel vendor exists: " . (file_exists(__DIR__ . '/vendor') ? 'YES' : 'NO') . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
?>
